<?php

namespace App\Providers;

use App\Http\Resources\AdResource;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Pagination\Paginator;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application subServices.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application subServices.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Paginator::useBootstrap();
    }
}
