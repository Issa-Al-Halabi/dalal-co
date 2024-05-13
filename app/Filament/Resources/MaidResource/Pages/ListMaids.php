<?php

namespace App\Filament\Resources\MaidResource\Pages;

use App\Filament\Resources\MaidResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use App\Models\Maid;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListMaids extends ListRecords
{
    use ListRecords\Concerns\Translatable;
    protected static string $resource = MaidResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
            Actions\LocaleSwitcher::make(),
        ];
    }
    public function getTabs(): array
    {
        return [
            'all' => Tab::make()
                ->label("الكل")
                ->badgeColor("primary")
                ->badge(Maid::query()->count()),
            'available' => Tab::make()
                ->label("متوفرة")
                ->modifyQueryUsing(fn (Builder $query) => $query->doesntHave('order'))
                ->badgeColor("info")
                ->badge(Maid::query()->doesntHave('order')->count()),

            'unavailable' => Tab::make()
                ->label("غير متوفرة")
                ->modifyQueryUsing(fn (Builder $query) => $query->has('order'))
                ->badgeColor("danger")
                ->badge(Maid::query()->has('order')->count()),

        ];
    }
}