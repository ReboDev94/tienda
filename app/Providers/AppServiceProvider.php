<?php

namespace App\Providers;

use App\Models\Venta_producto;
use App\Observers\VentaProductoObserver;
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
        Venta_producto::observe(VentaProductoObserver::class);
    }
}
