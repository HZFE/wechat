<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use EasyWeChat\Foundation\Application;

class WechatServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('wechat', function () {
            return new Application(config('wechat'));
        });
    }
}
