<?php

namespace App\Filament\Resources\DeportrationResource\Pages;

use App\Filament\Resources\DeportrationResource;
use App\Models\Maid;
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

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $ownerId = Maid::findOrFail($data['maid_id'])->owner_id;
        $data['user_id'] = $ownerId;
        return $data;
    }
}
