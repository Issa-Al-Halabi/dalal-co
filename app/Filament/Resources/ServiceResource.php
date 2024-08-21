<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceResource\Pages;
use App\Filament\Resources\ServiceResource\RelationManagers;
use App\Models\Service;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceResource extends Resource
{
    use Translatable;
    protected static ?string $model = Service::class;

    protected static ?string $navigationIcon = 'heroicon-o-queue-list';
    protected static ?int $navigationSort = 6;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make("")->schema([
                    Forms\Components\TextInput::make('title')
                        ->label("عنوان")
                        ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('description')
                        ->label("الوصف")
                        ->maxLength(255),

                    Forms\Components\Group::make()->schema([
                        Forms\Components\Toggle::make('paid')
                            ->label("هل الخدمة مأجورة")
                            ->default(true),

                        Forms\Components\Toggle::make('status')
                            ->label("هل الخدمة متاحة")
                            ->default(true),
                    ])->columns(2),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('title')
                    ->label("عنوان")
                    ->searchable(),

                Tables\Columns\TextColumn::make('description')
                    ->label("الوصف")
                    ->searchable(),

                Tables\Columns\ToggleColumn::make('paid')
                    ->label("هل الخدمة مأجورة"),

                Tables\Columns\ToggleColumn::make('status')
                    ->label("هل الخدمة متاحة"),

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
            'index' => Pages\ListServices::route('/'),
            'create' => Pages\CreateService::route('/create'),
            'edit' => Pages\EditService::route('/{record}/edit'),
        ];
    }


    public static function getModelLabel(): string
    {
        return "خدمة";
    }
    public static function getPluralLabel(): string
    {
        return "خدماتنا";
    }
    public static function getNavigationLabel(): string
    {
        return "خدماتنا";
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
