<?php

namespace App\Providers;

use App\Channel;
use App\Observers\ChannelObserver;
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
        Channel::observe(ChannelObserver::class);
    }
}
