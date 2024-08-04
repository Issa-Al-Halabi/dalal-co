<?php

namespace App\Filament\Resources\RenewalOfResidenceResource\Pages;

use App\Filament\Resources\RenewalOfResidenceResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRenewalOfResidences extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = RenewalOfResidenceResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
