<?php

namespace App\Filament\Resources;

use App\Enums\LawTypes;
use App\Filament\Resources\LawResource\Pages;
use App\Filament\Resources\LawResource\RelationManagers;
use App\Models\Law;
use Filament\Forms;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\HtmlString;

class LawResource extends Resource
{
    use Translatable;
    protected static ?string $model = Law::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->label("اسم القانون")
                            ->maxLength(255),

                        Forms\Components\Select::make('type')
                            ->label("نوع القانون")
                            ->required()
                            ->options(
                                fn($livewire) => $livewire->activeLocale == "ar" ?
                                    [
                                        LawTypes::law =>  LawTypes::getNameAr(LawTypes::law),
                                        LawTypes::decree =>  LawTypes::getNameAr(LawTypes::decree),
                                    ] :
                                    [
                                        LawTypes::law =>  LawTypes::getName(LawTypes::law),
                                        LawTypes::decree =>  LawTypes::getName(LawTypes::decree),
                                    ],
                            ),

                        Forms\Components\RichEditor::make('content')
                            ->label("المحتوى")
                            ->required()
                            ->columnSpanFull(),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label("#")
                    ->sortable(),

                Tables\Columns\TextColumn::make('name')
                    ->label("اسم القانون")
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('type')
                    ->state(fn(Law $record, $livewire) => $livewire->activeLocale == "ar"
                        ? LawTypes::getNameAr($record->type)
                        : LawTypes::getName($record->type))
                    ->badge()
                    ->color(fn(Law $record) => $record->type == LawTypes::law ? "success" : "info")
                    ->searchable()
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

                Tables\Actions\Action::make('content')
                    ->label("عرض المحتوى")
                    ->icon('heroicon-o-document-text')
                    ->form(
                        function (Law $record) {
                            return [
                                Placeholder::make('')->content(new HtmlString($record->content)),
                            ];
                        }
                    ),

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
            'index' => Pages\ListLaws::route('/'),
            'create' => Pages\CreateLaw::route('/create'),
            'edit' => Pages\EditLaw::route('/{record}/edit'),
        ];
    }


    public static function getModelLabel(): string
    {
        return "قانون";
    }
    public static function getPluralLabel(): string
    {
        return "القوانين والمراسيم";
    }
    public static function getNavigationLabel(): string
    {
        return "القوانين والمراسيم";
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
