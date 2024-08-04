<?php

namespace App\Filament\Resources\RenewalOfResidenceResource\Pages;

use App\Filament\Resources\RenewalOfResidenceResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRenewalOfResidence extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = RenewalOfResidenceResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
