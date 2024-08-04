<?php

namespace App\Filament\Resources\RenewalOfResidenceResource\Pages;

use App\Filament\Resources\RenewalOfResidenceResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRenewalOfResidence extends EditRecord
{
    use EditRecord\Concerns\Translatable;

    protected static string $resource = RenewalOfResidenceResource::class;

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
