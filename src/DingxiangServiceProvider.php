<?php

namespace Qinjd\Dingxiang;

use Illuminate\Support\ServiceProvider;

class DingxiangServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return null
     */
    public function boot()
    {
        // Publish configuration files
        $this->publishes([
            __DIR__ . '/../config/captcha.php' => config_path('captcha.php')
        ], 'config');

    }


    public function register()
    {

        // Merge configs
        $this->mergeConfigFrom(
            __DIR__ . '/../config/captcha.php', 'captcha'
        );


        $this->app->singleton('dxcaptcha', function () {
            return new CaptchaService();
        });
    }
}