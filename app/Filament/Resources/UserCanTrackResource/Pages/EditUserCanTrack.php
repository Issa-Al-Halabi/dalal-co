<?php

namespace App\Filament\Resources\UserCanTrackResource\Pages;

use App\Filament\Resources\UserCanTrackResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditUserCanTrack extends EditRecord
{
    protected static string $resource = UserCanTrackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\DeleteAction::make(),
        ];
    }
}
