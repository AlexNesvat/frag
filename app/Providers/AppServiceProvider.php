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

        //Braintree SDK call
        \Braintree_Configuration::environment(config('services.braintree.environment'));
        \Braintree_Configuration::merchantId(config('services.braintree.merchant_id'));
        \Braintree_Configuration::publicKey(config('services.braintree.public_key'));
        \Braintree_Configuration::privateKey(config('services.braintree.private_key'));

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
