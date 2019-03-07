<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

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
        $this->app->bind(CategoryRepository::class);
        $this->app->bind(PromotionRepository::class);
        $this->app->bind(FoodRepository::class);
        $this->app->bind(StoreRepository::class);
        $this->app->bind(UserRepository::class);
        $this->app->bind(BannerRepository::class);
    }
}
