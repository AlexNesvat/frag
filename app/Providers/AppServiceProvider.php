<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //https://laravel-news.com/laravel-5-4-key-too-long-error
        //Fix for mysql version lower ~5.7
        Schema::defaultStringLength(191);


        // Cashier::useCurrency('eur', '€');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
