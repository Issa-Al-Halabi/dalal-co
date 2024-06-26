<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Filament\Forms\Form;
use Filament\Forms\Components\Grid;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Placeholder;
use Filament\Forms\Concerns\InteractsWithForms;

class Filters extends Widget implements HasForms
{
    use InteractsWithForms;

    protected static string $view = 'filament.widgets.filters';

    protected int | string | array $columnSpan = 'full';

    protected static ?int $sort = 1;

    public ?array $data = [];

    public function form(Form $form): Form
    {
        return $form
            ->statePath('data')
            ->schema([

                Grid::make()
                    ->schema([
                        DatePicker::make('from')
                            ->label("من تاريخ")
                            ->live()
                            ->afterStateUpdated(fn (?string $state) => $this->dispatch('updateFromDate', from: $state)),
                        DatePicker::make('to')
                            ->label("الى تاريخ")
                            ->live()
                            ->afterStateUpdated(fn (?string $state) => $this->dispatch('updateToDate', to: $state)),
                    ]),
                Placeholder::make("")->content(
                    function ($get) {
                        $from = $get("from") ?? now()->startOfYear()->format("Y-m-d");
                        $to = $get("to") ?? now()->endOfYear()->format("Y-m-d");
                        return "من تاريخ (" . $from . ")" . " => " . "الى تاريخ (" . $to . ")";
                    }
                ),
            ]);
    }
}
