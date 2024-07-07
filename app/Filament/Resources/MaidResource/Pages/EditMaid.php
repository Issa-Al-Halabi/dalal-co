<?php

namespace App\Filament\Resources\MaidResource\Pages;

use App\Filament\Resources\MaidResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMaid extends EditRecord
{
    use EditRecord\Concerns\Translatable;
    protected static string $resource = MaidResource::class;

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
