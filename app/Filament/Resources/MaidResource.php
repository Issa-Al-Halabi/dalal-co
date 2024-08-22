<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MaidResource\Pages;
use Mohamedsabil83\FilamentFormsTinyeditor\Components\TinyEditor;
use App\Models\Maid;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Concerns\Translatable;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\ActionGroup;
use Filament\Tables\Table;
use Filament\Support\Colors\Color;

class MaidResource extends Resource
{
    use Translatable;
    protected static ?string $model = Maid::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    // protected static ?string $navigationGroup = 'العاملات';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make("")->schema([

                    Forms\Components\TextInput::make('first_name')
                        ->label("الأسم الأول")
                        // ->required()
                        ->maxLength(255),

                    Forms\Components\TextInput::make('last_name')
                        // ->required()
                        ->label("الكنية")
                        ->maxLength(255),

                    Forms\Components\TextInput::make('age')
                        // ->required()
                        ->label("العمر")
                        ->numeric(),

                    Forms\Components\Select::make('nationality_id')
                        // ->required()
                        ->label("الجنسية")
                        ->searchable()
                        ->preload()
                        ->relationship("nationality", "nationality")
                        ->getOptionLabelFromRecordUsing(fn($record, $livewire) => $record->hasTranslation('nationality', $livewire->activeLocale)
                            ? $record->getTranslation('nationality', $livewire->activeLocale)
                            : $record->getTranslation('nationality', "ar"))
                        ->createOptionForm(
                            NationalityResource::getForm()
                        ),


                    Forms\Components\DatePicker::make('residence_expire_at')
                        // ->required()
                        ->label("تاريخ انتهاء الاقامة"),

                    Forms\Components\TagsInput::make('languages')
                        // ->required()
                        ->label("اللغات")
                        ->placeholder("أكتب اللغات"),


                    Forms\Components\TagsInput::make('countries')
                        // ->required()
                        ->label("الدول التي عملت بها")
                        ->placeholder("أكتب الدول"),


                    Forms\Components\Select::make('owner_id')
                        // ->required()
                        ->label("الكفيل")
                        ->hint("اذا تريد ان تحدد الكفيل مباشرة")
                        ->searchable()
                        ->preload()
                        ->relationship("owner", "name"),

                    Forms\Components\TextInput::make('experiences')
                        // ->required()
                        ->label("الخبرات")
                        ->maxLength(255)
                        ->columnSpanFull(),

                    TinyEditor::make('description')
                        // ->required()
                        ->label("الوصف")
                        ->columnSpanFull(),

                    Forms\Components\FileUpload::make('image')
                        ->label("الصورة")
                        // ->required()
                        ->image()->fetchFileInformation(false)
                        ->directory('images/maids')
                        ->visibility('public')
                        ->disk('public')
                        ->imageEditor()
                        ->downloadable()
                        ->imageResizeMode('cover')
                        ->imageResizeTargetWidth('450')
                        ->imageResizeTargetHeight('450')
                        ->columnSpanFull(),

                    Forms\Components\FileUpload::make('video')
                        ->label("فيديو")
                        ->fetchFileInformation(false)
                        ->directory('videos/maids')
                        ->acceptedFileTypes(['video/mp4', 'video/x-m4v', 'video/*'])
                        ->afterStateUpdated(fn(callable $set, $state) => $set('mime', $state?->getMimeType()))
                        ->columnSpanFull(),
                ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label("#")
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image')
                    ->label("الصورة")
                    ->disk('public')
                    ->width("50px")
                    ->height("50px")
                    ->visibility('private'),

                Tables\Columns\TextColumn::make('first_name')
                    ->label("الأسم الأول")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('last_name')
                    ->label("الكنية")
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('age')
                    ->label("العمر")
                    ->numeric()
                    ->sortable(),

                Tables\Columns\TextColumn::make('nationality.nationality')
                    ->label("الجنسية")
                    ->sortable()
                    ->searchable()
                    ->color(Color::Purple)
                    ->badge(),

                Tables\Columns\TextColumn::make('residence_expire_at')
                    ->label("تاريخ انتهاء الاقامة")
                    ->state(function (Maid $record) {
                        return  $record->residence_expire_at == null ? "لا يوجد" : $record->residence_expire_at;
                    }),

                Tables\Columns\TextColumn::make('languages')
                    ->label("اللغات")
                    ->badge()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('countries')
                    ->label("الدول التي عملت بها")
                    ->badge()
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('available')
                    ->label("متوفرة")
                    ->badge()
                    ->color(fn(Maid $record) =>
                    $record->owner == null ? "info" : "danger")
                    ->state(
                        fn(Maid $record) =>
                        $record->owner == null ? "متوفرة" :  "محجوزة من قبل " . $record->owner->name
                    ),

                Tables\Columns\TextColumn::make('experiences')
                    ->label("الخبرات")
                    ->sortable()
                    ->searchable(),

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

                ActionGroup::make(
                    [
                        Tables\Actions\ViewAction::make(),
                        Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListMaids::route('/'),
            'create' => Pages\CreateMaid::route('/create'),
            'edit' => Pages\EditMaid::route('/{record}/edit'),
        ];
    }


    public static function getModelLabel(): string
    {
        return "عاملة";
    }
    public static function getPluralLabel(): string
    {
        return "العاملات";
    }
    public static function getNavigationLabel(): string
    {
        return "العاملات";
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
