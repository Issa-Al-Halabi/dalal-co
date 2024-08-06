<?php

namespace App\Filament\Resources\GiveInOrderResource\Pages;

use App\Filament\Resources\GiveInOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGiveInOrders extends ListRecords
{
    use ListRecords\Concerns\Translatable;

    protected static string $resource = GiveInOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
