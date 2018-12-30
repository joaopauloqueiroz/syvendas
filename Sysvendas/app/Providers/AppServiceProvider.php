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
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Interfaces\SearchProductInterface',
            'App\Repositories\Implementations\EloquentProduct'
        );
        
        $this->app->bind(
            'App\Repositories\Interfaces\ClientInterface',
            'App\Repositories\Implementations\EloquentClient'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\SaleInterface',
            'App\Repositories\Implementations\EloquentSale'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\PedidoInterface',
            'App\Repositories\Implementations\PedidoProduct'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\StockInterface',
            'App\Repositories\Implementations\ControleStock'
        );

        $this->app->bind(
            'App\Repositories\Interfaces\OrderInterface',
            'App\Repositories\Implementations\EloquentOrder'
        );
    }
}
