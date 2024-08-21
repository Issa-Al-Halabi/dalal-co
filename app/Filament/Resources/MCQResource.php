<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MCQResource\Pages;
use App\Filament\Resources\MCQResource\RelationManagers;
use App\Models\MCQ;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MCQResource extends Resource
{
    protected static ?string $model = MCQ::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?int $navigationSort = 8;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table


            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label("اسم المستخدم"),

                Tables\Columns\TextColumn::make('elderly_care')
                    ->label("رعاية مسن")
                    ->badge()
                    ->color("primary")
                    ->state(fn($record) => $record->elderly_care ? "نعم" : "لا"),

                Tables\Columns\TextColumn::make('children_care')
                    ->label("رعاية اطفال")
                    ->badge()
                    ->color("info")
                    ->state(fn($record) => $record->children_care ? "عدد الاطفال : " . $record->children_care  : "لا"),

                Tables\Columns\TextColumn::make('nursing_course')
                    ->label("دورة تمريض")
                    ->badge()
                    ->color("success")
                    ->state(fn($record) => $record->nursing_course ? "نعم" : "لا"),

                Tables\Columns\TextColumn::make('homework_experience')
                    ->label("خبرة بأعمال المنزل")
                    ->badge()
                    ->color("warning")
                    ->state(fn($record) => $record->homework_experience ? "نعم" : "لا"),

                Tables\Columns\TextColumn::make('reception')
                    ->label("استقبال")
                    ->badge()
                    ->color("danger")
                    ->state(fn($record) => $record->reception ? "نعم" : "لا"),

                Tables\Columns\TextColumn::make('created_at')
                    ->label("تاريخ الانشاء")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: false),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label("تاريخ اخر تحديث")
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

            ])
            ->defaultSort('id', 'desc')
            ->filters([

                self::makeMyFilter("elderly_care", "رعاية مسن"),

                self::makeMyFilter("children_care", "رعاية اطفال", true),

                self::makeMyFilter("nursing_course", "دورة تمريض"),

                self::makeMyFilter("homework_experience", "خبرة بأعمال المنزل"),

                self::makeMyFilter("reception", "استقبال"),
            ])
            ->actions([
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    public static function makeMyFilter($columnName, $label, $isInt = false): TernaryFilter
    {
        return TernaryFilter::make($columnName)
            ->label($label)
            ->placeholder('الكل')
            ->trueLabel('نعم')
            ->falseLabel('لا')
            ->queries(
                true: fn(Builder $query) => !$isInt ? $query->where($columnName, true) : $query->where("children_care", ">", 0),
                false: fn(Builder $query) => !$isInt ? $query->where($columnName, false) : $query->where("children_care", 0),
                blank: fn(Builder $query) => $query,
            );
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
            'index' => Pages\ListMCQS::route('/'),
            // 'create' => Pages\CreateMCQ::route('/create'),
            // 'edit' => Pages\EditMCQ::route('/{record}/edit'),
        ];
    }


    public static function getModelLabel(): string
    {
        return "تسجيل طلبك لخدمتك";
    }
    public static function getPluralLabel(): string
    {
        return "تسجيل طلبك لخدمتك";
    }
    public static function getNavigationLabel(): string
    {
        return "تسجيل طلبك لخدمتك";
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
