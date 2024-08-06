<?php

namespace App\Filament\Resources\GiveInOrderResource\Pages;

use App\Filament\Resources\GiveInOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateGiveInOrder extends CreateRecord
{

    use CreateRecord\Concerns\Translatable;

    protected static string $resource = GiveInOrderResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
