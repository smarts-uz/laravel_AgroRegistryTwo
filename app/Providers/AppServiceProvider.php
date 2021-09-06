<?php

namespace App\Providers;

use App\View\Components\navbar;
use App\View\Components\footer;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
        Blade::component('navbar', navbar::class);
        Blade::component('footer', footer::class);
        Schema::defaultStringLength(191);
    }
}
