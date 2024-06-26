<?php

namespace App\Filament\Resources\LawResource\Pages;

use App\Filament\Resources\LawResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLaw extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = LawResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
