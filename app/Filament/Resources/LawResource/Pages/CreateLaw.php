<?php

namespace App\Filament\Resources\LawResource\Pages;

use App\Filament\Resources\LawResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLaw extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;
    protected static string $resource = LawResource::class;
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
