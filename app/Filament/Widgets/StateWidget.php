<?php

namespace App\Filament\Widgets;

use App\Filament\Resources\MaidResource;
use App\Filament\Resources\OrderResource;
use App\Filament\Resources\UserResource;
use App\Models\Maid;
use App\Models\Order;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Carbon;
use Livewire\Attributes\On;

class StateWidget extends BaseWidget
{
    protected static ?int $sort = 2;
    public Carbon $fromDate;
    public Carbon $toDate;

    #[On('updateFromDate')]
    public function updateFromDate(string $from): void
    {
        $this->fromDate =  Carbon::make($from);
    }
    #[On('updateToDate')]
    public function updateToDate(string $to): void
    {
        $this->toDate = Carbon::make($to);
    }

    protected function getStats(): array
    {
        $fromDate = $this->fromDate ?? now()->startOfYear();
        $toDate = $this->toDate ?? now()->endOfYear();

        $userChart = $this->getStatsChart(User::class, $fromDate, $toDate);
        $orderChart = $this->getStatsChart(Order::class, $fromDate, $toDate);
        $maidChart = $this->getStatsChart(Maid::class, $fromDate, $toDate);

        return [
            Stat::make("Users", User::whereDate('created_at', '>=', $fromDate)
                ->whereDate('created_at', '<=', $toDate)
                ->count())
                ->label("المستخدمين")
                ->description("عدد المستخدمين")
                ->descriptionIcon("heroicon-o-user-group", IconPosition::Before)
                ->chart($userChart->toArray())
                ->color("success")
                ->url(UserResource::getUrl()),

            Stat::make("Orders", Order::whereDate('created_at', '>=', $fromDate)
                ->whereDate('created_at', '<=', $toDate)
                ->count())
                ->label("الطلبات")
                ->description("عدد الطلبات")
                ->descriptionIcon("heroicon-o-inbox-stack", IconPosition::Before)
                ->chart($orderChart->toArray())
                ->color("success")
                ->url(OrderResource::getUrl()),

            Stat::make("Maids", Maid::whereDate('created_at', '>=', $fromDate)
                ->whereDate('created_at', '<=', $toDate)
                ->count())
                ->label("الخادمات")
                ->description("عدد الخادمات")
                ->descriptionIcon("heroicon-o-user", IconPosition::Before)
                ->chart($maidChart->toArray())
                ->color("success")
                ->url(MaidResource::getUrl()),
        ];
    }

    protected function getStatsChart($model, $fromDate, $toDate)
    {

        $data = Trend::model($model)
            ->between(
                start: $fromDate,
                end: $toDate,
            )
            ->perHour()
            ->count();
        return $data->map(fn (TrendValue $value) => $value->aggregate);
    }
}
