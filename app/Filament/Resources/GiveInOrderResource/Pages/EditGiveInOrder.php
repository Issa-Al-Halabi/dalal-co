<?php

namespace App\Filament\Resources\GiveInOrderResource\Pages;

use App\Filament\Resources\GiveInOrderResource;
use App\Models\Maid;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGiveInOrder extends EditRecord
{

    use EditRecord\Concerns\Translatable;

    protected static string $resource = GiveInOrderResource::class;

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

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $oldOwnerId = Maid::findOrFail($data['maid_id'])->owner_id;
        $data['old_owner_id'] = $oldOwnerId;
        return $data;
    }
}
