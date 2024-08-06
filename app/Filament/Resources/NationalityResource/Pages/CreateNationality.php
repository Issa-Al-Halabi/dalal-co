<?php

namespace App\Filament\Resources\NationalityResource\Pages;

use App\Filament\Resources\NationalityResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateNationality extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = NationalityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\LocaleSwitcher::make(),
            // ...
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
