<?php

namespace App\Filament\Resources\GiveInOrderResource\Pages;

use App\Filament\Resources\GiveInOrderResource;
use App\Models\Maid;
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

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $oldOwnerId = Maid::findOrFail($data['maid_id'])->owner_id;
        $data['old_owner_id'] = $oldOwnerId;
        return $data;
    }
}
