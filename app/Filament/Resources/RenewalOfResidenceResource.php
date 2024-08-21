<?php

namespace App\Filament\Resources;

use App\Enums\OrderTypes;
use App\Filament\Resources\RenewalOfResidenceResource\Pages;
use App\Filament\Resources\RenewalOfResidenceResource\RelationManagers;
use App\Models\RenewalOfResidence;
use App\Services\OrderStatusService;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Wizard;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Actions\Action as NextAction;

class RenewalOfResidenceResource extends Resource
{
    use Translatable;

    protected static ?string $model = RenewalOfResidence::class;

    protected static ?string $navigationIcon = 'heroicon-o-newspaper';

    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()->schema([
                    Group::make()->schema([
                        Forms\Components\Select::make('maid_id')
                            ->label("اسم الخادمة")
                            ->required()
                            ->searchable()
                            ->preload()
                            ->relationship(
                                'maid',
                                'first_name',
                                fn(RenewalOfResidence|null $record, $query) =>
                                $query->has("owner")->orWhere("id", $record == null ? 0 : $record->maid->id)
                            )
                            ->getOptionLabelFromRecordUsing(fn($record, $livewire) => $record->hasTranslation('first_name', $livewire->activeLocale)
                                ? $record->getTranslation('first_name', $livewire->activeLocale) . " " . $record->getTranslation('last_name', $livewire->activeLocale)
                                : $record->first_name . " " . $record->last_name),
                    ])
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
                    ->state(fn(RenewalOfResidence $record) => $record->maid->first_name . " " . $record->maid->first_name),

                Tables\Columns\TextColumn::make('user.name')
                    ->label("اسم العميل")
                    ->searchable()
                    ->sortable(),


                Tables\Columns\TextColumn::make('status_id')
                    ->label("الحالة الحالية")
                    ->state(
                        fn(RenewalOfResidence $record) => (new OrderStatusService)->getOrderStatusLabel($record, OrderTypes::renewalOfResidence)
                    )
                    ->searchable()
                    ->badge()
                    ->color(fn(RenewalOfResidence $record) => (new OrderStatusService)->getOrderStatusLabelColor($record, OrderTypes::renewalOfResidence))
                    ->sortable(),

                Tables\Columns\TextColumn::make('new_residence_date')
                    ->label("تاريخ الاقامة الجديد")
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color("primary")
                    ->state(fn(RenewalOfResidence $record) => $record->new_residence_date ?? "لم يتم تحديده بعد"),


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
                    ->action(function (RenewalOfResidence $record, array $data): void {
                        (new OrderStatusService)->getResidenceFormAction($record, $data);
                    })
                    // To Auto Fill The Form
                    ->mountUsing(
                        function (Forms\ComponentContainer $form, RenewalOfResidence $record) {
                            return   $form->fill((new OrderStatusService)->getOldData($record));
                        }
                    )
                    // To Get The Form
                    ->form(
                        function (RenewalOfResidence $record) {
                            return [
                                Wizard::make(
                                    (new OrderStatusService)->getTypeSteps($record, OrderTypes::renewalOfResidence)
                                )
                                    ->startOnStep((new OrderStatusService)->getFormCurrentStep($record, OrderTypes::renewalOfResidence))
                                    ->nextAction(
                                        fn(NextAction $action) => $action->label('الإنتقال للخطوة التالية'),
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
            'index' => Pages\ListRenewalOfResidences::route('/'),
            'create' => Pages\CreateRenewalOfResidence::route('/create'),
            // 'edit' => Pages\EditRenewalOfResidence::route('/{record}/edit'),
        ];
    }


    public static function getModelLabel(): string
    {
        return "طلب تجديد الاقامة";
    }
    public static function getPluralLabel(): string
    {
        return "طلبات تجديد الاقامة";
    }
    public static function getNavigationLabel(): string
    {
        return "طلبات تجديد الاقامة";
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
