<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\RandomGeneratorService;
use App\Services\CarSharingService;
use App\Services\Contracts\RandomGenerator;
use App\Services\Contracts\CarSharing;

use App\Repositories\CarRepository;
use App\Repositories\Contracts\Repository;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RandomGenerator::class, RandomGeneratorService::class);
        $this->app->bind(CarSharing::class, CarSharingService::class);
        $this->app->bind(Repository::class, CarRepository::class);
    }
}
