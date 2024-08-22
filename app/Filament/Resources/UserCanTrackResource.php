<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserCanTrackResource\Pages;
use App\Filament\Resources\UserCanTrackResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class UserCanTrackResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 1;

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

            ->heading('ملاحظة')
            ->description('هنا يمكنك اتاحة إمكانية تتبع الطلبات للمستخدمين (على حسب خدمة تتبع الطلبات) عند تفعيل هذه الخدمة للمستخدم سيتمكن من متابعة كل طلباته في الموقع وسيصله بريد الكتروني بتغير حالة الطلب')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label("الاسم")
                    ->searchable(),

                Tables\Columns\ToggleColumn::make('can_track')
                    ->label("اتاحة امكانية تتبع الطلبات"),

                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('id', 'desc')
            ->modifyQueryUsing(function (Builder $query) {
                $query->doesntHaveRole();
            })
            ->filters([
                //
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListUserCanTracks::route('/'),
            // 'create' => Pages\CreateUserCanTrack::route('/create'),
            // 'edit' => Pages\EditUserCanTrack::route('/{record}/edit'),
        ];
    }

    public static function getModelLabel(): string
    {
        return "اتاحة امكانية تتبع الطلبات";
    }
    public static function getPluralLabel(): string
    {
        return "اتاحة امكانية تتبع الطلبات";
    }
    public static function getNavigationLabel(): string
    {
        return "اتاحة امكانية تتبع الطلبات";
    }
}
