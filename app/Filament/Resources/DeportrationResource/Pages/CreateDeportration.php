<?php

namespace App\Filament\Resources\DeportrationResource\Pages;

use App\Filament\Resources\DeportrationResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDeportration extends CreateRecord
{
    use CreateRecord\Concerns\Translatable;

    protected static string $resource = DeportrationResource::class;
    
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
