<?php

namespace App\Filament\Resources;

use App\Enums\OrderTypes;
use App\Filament\Resources\GiveInOrderResource\Pages;
use App\Filament\Resources\GiveInOrderResource\RelationManagers;
use App\Models\GiveInOrder;
use App\Models\Maid;
use App\Models\User;
use App\Services\OrderStatusService;
use Filament\Forms;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Filament\Forms\Components\Actions\Action as NextAction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class GiveInOrderResource extends Resource
{
    use Translatable;

    protected static ?string $model = GiveInOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make()->schema([
                    Forms\Components\Group::make()->schema([

                        Forms\Components\Select::make('maid_id')
                            ->label("اسم الخادمة")
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship(
                                'maid',
                                'first_name',
                                fn (GiveInOrder|null $record, $query) =>
                                $query->has("owner")->orWhere("id", $record == null ? 0 : $record->maid->id)
                            )
                            ->getOptionLabelFromRecordUsing(fn ($record, $livewire) => $record->hasTranslation('first_name', $livewire->activeLocale)
                                ? $record->getTranslation('first_name', $livewire->activeLocale) . " " . $record->getTranslation('last_name', $livewire->activeLocale)
                                : $record->first_name . " " . $record->last_name)
                            ->reactive()
                            ->afterStateUpdated(fn (callable $set) => $set('new_owner_id', null)),


                        Forms\Components\Select::make('new_owner_id')
                            ->required()
                            ->label("الكفيل الجديد")
                            ->searchable()
                            ->preload()
                            ->options(function (callable $get) {
                                $maidId = $get('maid_id');
                                if ($maidId) {
                                    $ownerId = Maid::where('id', $maidId)->first()->owner->id;
                                    return User::whereNot('id', $ownerId)->pluck('name', 'id');
                                }
                                return [];
                            })
                            ->reactive(),

                    ])->columns(2)
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([


                Tables\Columns\TextColumn::make('maid.first_name')
                    ->label("اسم الخادمة")
                    ->sortable()
                    ->searchable()
                    ->state(fn (GiveInOrder $record) => $record->maid->first_name . " " . $record->maid->first_name),

                Tables\Columns\TextColumn::make('maid.owner.name')
                    ->label("اسم الكفيل الأول")
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('new_owner.name')
                    ->label("اسم الكفيل الثاني")
                    ->searchable()
                    ->sortable(),


                Tables\Columns\TextColumn::make('status_id')
                    ->label("الحالة الحالية")
                    ->state(
                        fn (GiveInOrder $record) => (new OrderStatusService)->getOrderStatusLabel($record, OrderTypes::renewalOfResidence)
                    )
                    ->searchable()
                    ->badge()
                    ->color(fn (GiveInOrder $record) => (new OrderStatusService)->getOrderStatusLabelColor($record))
                    ->sortable(),

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
            ->filters([
                //
            ])

            ->actions([
                Action::make("edit_order_status")
                    ->label("تعديل حالة الطلب")
                    // When Submitting The Form
                    ->action(function (GiveInOrder $record, array $data): void {
                        (new OrderStatusService)->getResidenceFormAction($record, $data);
                    })
                    // To Auto Fill The Form
                    ->mountUsing(
                        function (Forms\ComponentContainer $form, GiveInOrder $record) {
                            return   $form->fill((new OrderStatusService)->getOldData($record));
                        }
                    )
                    // To Get The Form
                    ->form(
                        function (GiveInOrder $record) {
                            return [
                                Wizard::make(
                                    (new OrderStatusService)->getTypeSteps($record, OrderTypes::renewalOfResidence)
                                )
                                    ->startOnStep((new OrderStatusService)->getFormCurrentStep($record, OrderTypes::renewalOfResidence))
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
            'index' => Pages\ListGiveInOrders::route('/'),
            'create' => Pages\CreateGiveInOrder::route('/create'),
            'edit' => Pages\EditGiveInOrder::route('/{record}/edit'),
        ];
    }
}
