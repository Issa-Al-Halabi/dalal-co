<?php

namespace App\Filament\Resources;

use App\Enums\OrderTypes;
use App\Filament\Resources\DeportrationResource\Pages;
use App\Filament\Resources\DeportrationResource\RelationManagers;
use App\Models\Deportration;
use App\Services\OrderStatusService;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Wizard;
use Filament\Tables\Actions\Action;
use Filament\Tables\Actions\ActionGroup;
use Filament\Forms\Components\Actions\Action as NextAction;

class DeportrationResource extends Resource
{
    use Translatable;

    protected static ?string $model = Deportration::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 5;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema([
                    Forms\Components\Select::make('maid_id')
                        ->label("اسم الخادمة")
                        ->required()
                        ->searchable()
                        ->preload()
                        ->relationship(
                            'maid',
                            'first_name',
                            fn (Deportration|null $record, $query) =>
                            $query->has("owner")->orWhere("id", $record == null ? 0 : $record->maid->id)
                        )
                        ->getOptionLabelFromRecordUsing(fn ($record, $livewire) => $record->hasTranslation('first_name', $livewire->activeLocale)
                            ? $record->getTranslation('first_name', $livewire->activeLocale) . " " . $record->getTranslation('last_name', $livewire->activeLocale)
                            : $record->first_name . " " . $record->last_name),
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
                    ->state(fn (Deportration $record) => $record->maid->first_name . " " . $record->maid->first_name),

                Tables\Columns\TextColumn::make('status_id')
                    ->label("الحالة الحالية")
                    ->state(
                        fn (Deportration $record) => (new OrderStatusService)->getOrderStatusLabel($record, OrderTypes::deportration)
                    )
                    ->searchable()
                    ->badge()
                    ->color(fn (Deportration $record) => (new OrderStatusService)->getOrderStatusLabelColor($record, OrderTypes::deportration))
                    ->sortable(),

                Tables\Columns\TextColumn::make('deportration_date')
                    ->label("موعد السفر")
                    ->state(
                        fn (Deportration $record) => $record->deportration_date ?? "لم يتم تحديده بعد"
                    )
                    ->searchable()
                    ->badge()
                    ->color("primary")
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
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Action::make("edit_order_status")
                    ->label("تعديل حالة الطلب")
                    // When Submitting The Form
                    ->action(function (Deportration $record, array $data): void {
                        (new OrderStatusService)->getDeportrationFormAction($record, $data);
                    })
                    // To Auto Fill The Form
                    ->mountUsing(
                        function (Forms\ComponentContainer $form, Deportration $record) {
                            return   $form->fill((new OrderStatusService)->getOldData($record));
                        }
                    )
                    // To Get The Form
                    ->form(
                        function (Deportration $record) {
                            return [
                                Wizard::make(
                                    (new OrderStatusService)->getTypeSteps($record, OrderTypes::deportration)
                                )
                                    ->startOnStep((new OrderStatusService)->getFormCurrentStep($record, OrderTypes::deportration))
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
            'index' => Pages\ListDeportrations::route('/'),
            'create' => Pages\CreateDeportration::route('/create'),
            // 'edit' => Pages\EditDeportration::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return "طلب تسفير";
    }
    public static function getPluralLabel(): string
    {
        return "طلبات تسفير";
    }
    public static function getNavigationLabel(): string
    {
        return "طلبات التسفير";
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
