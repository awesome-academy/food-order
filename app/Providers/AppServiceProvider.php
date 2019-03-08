<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Category;
use App\Store;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $category = Category::all();
        view()->share('category', $category);
        $store = Store::all();
        view()->share('store', $store);
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
        $this->app->bind(FoodImageRepository::class);
    }
}
