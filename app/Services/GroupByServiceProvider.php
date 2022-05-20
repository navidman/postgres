<?php

namespace App\Services;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class GroupByServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('groupBy', function() {
            return App::make('App\Services\GroupByService');
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
