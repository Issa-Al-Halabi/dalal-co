<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Carbon;

class UsersChart extends ChartWidget
{
    protected static ?string $heading = 'مخطط المستخدمين';
    protected static string $color = 'success';
    public ?string $filter = 'today';
    protected static ?int $sort = 3;

    public string $myHeading = 'مخطط الطلبات';
    public Carbon $startDate;
    public Carbon $endDate;

    protected function getData(): array
    {
        $activeFilter = $this->filter;

        $data = Trend::model(User::class);

        if ($activeFilter == "today") {
            $data = $data
                ->between(
                    start: now()->startOfDay(),
                    end: now()->endOfDay(),
                )
                ->perHour();
        } else if ($activeFilter == "week") {
            $data = $data
                ->between(
                    start: now()->startOfWeek(),
                    end: now()->endOfWeek(),
                )
                ->perDay();
        } else if ($activeFilter == "month") {
            $data = $data
                ->between(
                    start: now()->startOfMonth(),
                    end: now()->endOfMonth(),
                )
                ->perDay();
        } else {
            $data = $data
                ->between(
                    start: now()->startOfYear(),
                    end: now()->endOfYear(),
                )
                ->perMonth();
        }

        $this->startDate = $data->start;
        $this->endDate = $data->end;

        $this->myHeading = 'مخطط المستخدمين ' . "من تاريخ (" .
            $this->startDate->format("Y-m-d") . ")" .
            " => " .
            "الى تاريخ (" . $this->endDate->format("Y-m-d") . ")";

        $data = $data->count();

        return [
            'datasets' => [
                [
                    'label' => 'Users',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }

    protected function getFilters(): ?array
    {
        return [
            'today' => 'Today',
            'week' => 'Last week',
            'month' => 'Last month',
            'year' => 'This year',
        ];
    }
    function getHeading(): string
    {
        return $this->myHeading;
    }
}
