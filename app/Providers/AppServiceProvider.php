<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Product;
use App\Customer;
use View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       if(Schema::hasTable('products')){
                View::share('products', Product::all());
            }
        if(Schema::hasTable('customers')){
                View::share('customers', Customer::all());
            }
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
