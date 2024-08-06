<?php

namespace App\Filament\Resources\DeportrationResource\Pages;

use App\Filament\Resources\DeportrationResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDeportration extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = DeportrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
