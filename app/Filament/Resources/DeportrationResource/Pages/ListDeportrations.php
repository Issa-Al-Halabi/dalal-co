<?php

namespace App\Filament\Resources\DeportrationResource\Pages;

use App\Filament\Resources\DeportrationResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDeportrations extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = DeportrationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
