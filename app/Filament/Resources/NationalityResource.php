<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NationalityResource\Pages;
use App\Filament\Resources\NationalityResource\RelationManagers;
use App\Models\Nationality;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\Concerns\Translatable;
use Filament\Support\Colors\Color;

class NationalityResource extends Resource
{
    use Translatable;
    protected static ?string $model = Nationality::class;

    protected static ?string $navigationIcon = 'heroicon-o-globe-europe-africa';
    protected static ?int $navigationSort = 1;

    public static function getForm()
    {
        return [
            Forms\Components\TextInput::make('nationality')
                ->label("الجنسية")
                ->required()
                ->maxLength(255)
                ->columnSpanFull(),

            Forms\Components\Toggle::make('status')
                ->label("هل الجنسية متاحة ؟")
                ->default(true),
        ];
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema(self::getForm());
    }

    public static function table(Table $table): Table
    {
        return $table
            ->heading('ملاحظة')
            ->description('يمكنك تغيير ترتيب الجنسيات بالنقر على الزر ادناه')
            ->columns([
                Tables\Columns\TextColumn::make('order')
                    ->label('الترتيب')
                    ->badge(fn ($record) => $record->order != null && $record->order <= 3)
                    ->color(function ($record) {
                        switch ($record->order) {
                            case 1:
                                return Color::rgb('rgb(255, 215, 0)'); // gold
                            case 2:
                                return Color::rgb('rgb(192, 192, 192)'); // silver
                            case 3:
                                return Color::rgb('rgb(205, 127, 50)'); // bronze
                            default:
                                return null;
                        }
                    })
                    ->sortable()
                    ->state(
                        function ($record) {
                            switch ($record->order) {
                                case 1:
                                    return $record->order . " - " . "الأول"; // first
                                case 2:
                                    return $record->order . " - " . "الثاني"; // second
                                case 3:
                                    return $record->order . " - " . "الثالث"; // third
                                default:
                                    return $record->order;
                            }
                        }
                    ),
                Tables\Columns\TextColumn::make('nationality')
                    ->label("الجنسية")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\ToggleColumn::make('status')
                    ->label("هل الجنسية متاحة ؟"),
            ])
            ->defaultSort('order', 'asc')
            ->reorderable('order')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'index' => Pages\ListNationalities::route('/'),
            'create' => Pages\CreateNationality::route('/create'),
            'edit' => Pages\EditNationality::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return "جنسية";
    }
    public static function getPluralLabel(): string
    {
        return "الجنسيات";
    }
    public static function getNavigationLabel(): string
    {
        return "الجنسيات";
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
