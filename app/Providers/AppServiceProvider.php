<?php

namespace App\Providers;

use App\Models\WorkShop;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $latestworkshop = WorkShop::latest()->take(3)->get();
        view()->share('latestworkshop', $latestworkshop);

    }
}
