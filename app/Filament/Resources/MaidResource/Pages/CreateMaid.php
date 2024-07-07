<?php

namespace App\Filament\Resources\MaidResource\Pages;

use App\Filament\Resources\MaidResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMaid extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = MaidResource::class;
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
