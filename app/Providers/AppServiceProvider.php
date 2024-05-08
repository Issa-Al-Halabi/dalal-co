<?php

namespace App\Providers;

use App\Models\Maid;
use App\Observers\MaidObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Maid::observe(MaidObserver::class);
    }
}
