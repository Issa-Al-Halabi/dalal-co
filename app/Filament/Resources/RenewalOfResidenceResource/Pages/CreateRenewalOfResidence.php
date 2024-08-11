<?php

namespace App\Filament\Resources\RenewalOfResidenceResource\Pages;

use App\Filament\Resources\RenewalOfResidenceResource;
use App\Models\Maid;
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

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $ownerId = Maid::findOrFail($data['maid_id'])->owner_id;
        $data['user_id'] = $ownerId;
        return $data;
    }
}
