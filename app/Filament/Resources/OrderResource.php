<?php

namespace App\Filament\Resources;

use App\Enums\OrderTypes;
use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
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
use Filament\Forms\Components\Actions\Action as NextAction;
use App\Services\OrderStatusService;
use Filament\Forms\Components\Grid;

class OrderResource extends Resource
{
    use Translatable;
    protected static ?string $model = Order::class;

    protected static ?string $navigationIcon = 'heroicon-o-briefcase';
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
                                $query->doesntHave("owner")->orWhere("id", $record == null ? 0 : $record->maid->id)
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

                Tables\Columns\TextColumn::make('maid.first_name')
                    ->label("اسم الخادمة")
                    ->sortable()
                    ->state(fn (Order $record) => $record->maid->first_name . " " . $record->maid->first_name),

                Tables\Columns\TextColumn::make('status_id')
                    ->label("الحالة الحالية")
                    ->state(
                        fn (Order $record) => (new OrderStatusService)->getOrderStatusLabel($record, $record->type)
                    )
                    ->searchable()
                    ->badge()
                    ->color(fn (Order $record) => (new OrderStatusService)->getOrderStatusLabelColor($record))
                    ->sortable(),

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
                    ->label("تاريخ الانشاء")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label("تاريخ اخر تحديث")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Action::make("edit_order_status")
                    ->label("تعديل حالة الطلب")
                    // When Submitting The Form
                    ->action(function (Order $record, array $data): void {
                        (new OrderStatusService)->getOrderFormAction($record, $data);
                    })
                    // To Auto Fill The Form
                    ->mountUsing(
                        function (Forms\ComponentContainer $form, Order $record) {
                            return   $form->fill((new OrderStatusService)->getOldData($record));
                        }
                    )
                    // To Get The Form
                    ->form(
                        function (Order $record) {
                            return [
                                Wizard::make(
                                    (new OrderStatusService)->getTypeSteps($record, $record->type)
                                )
                                    ->startOnStep((new OrderStatusService)->getFormCurrentStep($record, $record->type))
                                    ->nextAction(
                                        fn (NextAction $action) => $action->label('الإنتقال للخطوة التالية'),
                                    ),
                            ];
                        }
                    ),

                ActionGroup::make(
                    [
                        Tables\Actions\ViewAction::make(),
                        // Tables\Actions\EditAction::make(),
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
            // 'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return "طلب";
    }
    public static function getPluralLabel(): string
    {
        return "الطلبات";
    }
    public static function getNavigationLabel(): string
    {
        return "الطلبات";
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 10 ? 'warning' : 'primary';
    }
}
