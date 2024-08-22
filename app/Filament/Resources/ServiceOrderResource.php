<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ServiceOrderResource\Pages;
use App\Filament\Resources\ServiceOrderResource\RelationManagers;
use App\Models\Service;
use App\Models\ServiceOrder;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Pages\EditRecord;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ServiceOrderResource extends Resource
{
    protected static ?string $model = ServiceOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 7;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Section::make()->schema([

                    Forms\Components\Select::make('user_id')
                        ->label("اسم المستخدم")
                        ->required()
                        ->searchable()
                        ->preload()
                        ->relationship(
                            "user",
                            "name",
                        ),

                    Forms\Components\Select::make('service_id')
                        ->label("اسم الخدمة")
                        ->required()
                        ->searchable()
                        ->preload()
                        ->relationship(
                            "service",
                            "title",
                        )->getOptionLabelFromRecordUsing(
                            fn(Service $record) => ($record->title)
                        ),

                    Forms\Components\Textarea::make('notes')
                        ->label("ملاحظات")
                        ->hint("اضف ملاحظات اضافية عن هذا الطلب")
                        ->columnSpanFull(),

                    Forms\Components\Toggle::make('approved')
                        ->label("هل تم التواصل ؟؟ (تأكيد التواصل)")
                        ->default(true),

                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('user.name')
                    ->label("اسم الخدمة")
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('service.title')
                    ->label("اسم الخدمة")
                    ->searchable()
                    ->sortable(),

                Tables\Columns\ToggleColumn::make('approved')
                    ->label("تأكيد التواصل"),

                Tables\Columns\TextColumn::make('notes')
                    ->label("ملاحظات"),


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
            'index' => Pages\ListServiceOrders::route('/'),
            'create' => Pages\CreateServiceOrder::route('/create'),
            'edit' => Pages\EditServiceOrder::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return "طلب خدمة";
    }
    public static function getPluralLabel(): string
    {
        return "طلبات الخدمات";
    }
    public static function getNavigationLabel(): string
    {
        return "طلبات الخدمات";
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
