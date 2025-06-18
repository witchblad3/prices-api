<?php

namespace App\Providers;

use App\Repositories\Read\Product\GetProductPricesRepository;
use App\Repositories\Read\Product\GetProductPricesRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            GetProductPricesRepositoryInterface::class,
            GetProductPricesRepository::class
        );
    }


    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
