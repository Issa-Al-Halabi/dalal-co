<?php

namespace App\Filament\Resources\UserCanTrackResource\Pages;

use App\Filament\Resources\UserCanTrackResource;
use App\Models\User;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUserCanTracks extends ListRecords
{
    protected static string $resource = UserCanTrackResource::class;

    protected function getHeaderActions(): array
    {
        return [
            // Actions\CreateAction::make(),
        ];
    }

    // protected function getTableQuery(): Builder
    // {
    //     return User::query()->where('can_track', true);
    // }

}
