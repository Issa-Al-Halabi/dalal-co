<?php

namespace App\Filament\Resources;

use App\Enums\OrderTypes;
use App\Enums\StatusInputsTypes;
use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use App\Models\OrderStatus;
use App\Models\Status;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Wizard;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\DB;

class OrderResource extends Resource
{
    use Translatable;
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    // protected static ?string $navigationGroup = 'الطلبات';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make()->schema([
                    Group::make()->schema([
                        Forms\Components\Select::make('user_id')
                            ->label("اسم المستخدم")
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship("user", "name"),

                        Forms\Components\Select::make('maid_id')
                            ->label("اسم الخادمة")
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship(
                                'maid',
                                'first_name',
                                fn (Order|null $record, $query) =>
                                $query->doesntHave("order")->orWhere("id", $record == null ? 0 : $record->maid->id)
                            )
                            ->getOptionLabelFromRecordUsing(fn ($record, $livewire) => $record->hasTranslation('first_name', $livewire->activeLocale)
                                ? $record->getTranslation('first_name', $livewire->activeLocale) . " " . $record->getTranslation('last_name', $livewire->activeLocale)
                                : $record->first_name . " " . $record->last_name),

                        // Forms\Components\TextInput::make('status_id')
                        //     ->label("الحالة ال")
                        //     ->required()
                        //     ->searchable()
                        //     ->preload()
                        //     ->relationship("status", "name"),

                        Forms\Components\Select::make('type')
                            ->label("نوع الطلب")
                            ->required()
                            ->options(
                                fn ($livewire) => $livewire->activeLocale == "ar" ?
                                    [
                                        OrderTypes::immediately =>  OrderTypes::getNameAr(OrderTypes::immediately),
                                        OrderTypes::abroad =>  OrderTypes::getNameAr(OrderTypes::abroad),
                                    ] :
                                    [
                                        OrderTypes::immediately =>  OrderTypes::getName(OrderTypes::immediately),
                                        OrderTypes::abroad =>  OrderTypes::getName(OrderTypes::abroad),
                                    ],
                            ),
                    ])->columns(3),

                    Group::make()->schema([

                        Forms\Components\TextInput::make('book_ticket')
                            ->label("قيمة تذكرة السفر")
                            ->required()
                            ->maxLength(255)
                            ->numeric()
                            ->hidden(fn (Get $get): bool => !$get('book_ticket_bool')),


                        Forms\Components\TextInput::make('deliver_service')
                            ->label("قيمة خدمة التوصيل")
                            ->required()
                            ->maxLength(255)
                            ->numeric()
                            ->hidden(fn (Get $get): bool => !$get('deliver_service_bool')),
                    ])->columns(2),

                    Forms\Components\Toggle::make('book_ticket_bool')
                        ->label("حجز تذكرة سفر ؟؟")
                        ->required()
                        ->default(false)
                        ->afterStateHydrated(function (Toggle $component, Order|null $record): void {
                            if ($record == null) {
                                $component->state(false);
                            } else if ($record->book_ticket != null) {
                                $component->state(true);
                            } else {
                                $component->state(false);
                            }
                        })
                        ->live(),

                    Forms\Components\Toggle::make('deliver_service_bool')
                        ->label("خدمة التوصيل الى مطار دمشق الدولي؟؟")
                        ->required()
                        ->default(true)
                        ->afterStateHydrated(function (Toggle $component, Order|null $record): void {
                            if ($record == null) {
                                $component->state(false);
                            } else if ($record->deliver_service != null) {
                                $component->state(true);
                            } else {
                                $component->state(false);
                            }
                        })
                        ->live(),
                ]),
            ])->columns(3);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('user.name')
                    ->label("اسم المستخدم")
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('maid.full_name')
                    ->label("اسم الخادمة")
                    ->searchable()
                    ->sortable(),

                // Tables\Columns\TextColumn::make('status_id')
                //     ->sortable(),

                Tables\Columns\TextColumn::make('type')
                    ->state(fn (Order $record, $livewire) => $livewire->activeLocale == "ar"
                        ? OrderTypes::getNameAr($record->type)
                        : OrderTypes::getName($record->type))
                    ->sortable(),

                Tables\Columns\TextColumn::make('book_ticket')
                    ->label("قيمة تذكرة السفر")
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('deliver_service')
                    ->label("قيمة خدمة التوصيل")
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Action::make("edit_order_status ")
                    ->label("تعديل حالة الطلب")
                    // When Submitting The Form
                    ->action(function (Order $record, array $data): void {
                        // $record->statuses()->delete();
                        foreach ($data as $key => $value) {
                            [$label, $specificate_key, $status_id] = explode("_", $key);
                            dump($label, $specificate_key, $status_id);
                            // OrderStatus::create([
                            //     'order_id' => $record->id,
                            //     'status_id' => $status_id,
                            //     'specifications' => [],
                            // ]);
                        }
                        //    dd (explode("_",array_keys($data)[0])[1]);
                        dd($data);
                    })
                    // To Auto Fill The Form
                    ->mountUsing(
                        function (Forms\ComponentContainer $form, Order $record) {
                            $statuses = $record->statuses;

                            $filled_form = [];
                            foreach ($statuses as $status) {
                                foreach (array_keys($status->specifications) as $specification_key) {
                                    $key = StatusInputsTypes::getInputName($status->status->specifications[$specification_key]["type"], $specification_key, $status->status->id);
                                    $filled_form[$key] = $status->specifications[$specification_key];
                                }
                            }

                            return   $form->fill($filled_form);
                        }
                    )
                    // To Get The Form
                    ->form(
                        function (Order $record) {
                            $statuses_count = $record->statuses()->count();
                            return [
                                Wizard::make(Status::getTypeSteps($record->type))
                                    ->startOnStep($statuses_count + 1),
                            ];
                        }
                    ),

                ActionGroup::make(
                    [
                        Tables\Actions\ViewAction::make(),
                        Tables\Actions\EditAction::make(),
                        Tables\Actions\DeleteAction::make(),
                    ]
                )
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 10 ? 'warning' : 'danger';
    }
}
