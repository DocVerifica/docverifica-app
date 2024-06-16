<?php

namespace App\Providers;

use App\Services\PortalTransparenciaService;
use Illuminate\Support\ServiceProvider;
use App\Services\CnpjApiService;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(CnpjApiService::class, function ($app) {
            return new CnpjApiService();
        });
         $this->app->singleton(PortalTransparenciaService::class, function ($app) {
            return new PortalTransparenciaService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    }
}
