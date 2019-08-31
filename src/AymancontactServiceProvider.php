<?php
namespace Edumepro\Aymancontact;
use Illuminate\Support\ServiceProvider;


class AymancontactServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','Aymancontact');# to distingus this view for package not main view
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');# to distingus this view for package not main view

        # NOTE THE 2 paramter of mergeConfigFrom it is NOT package name as view way, but it is the name of the config file 'aymancontactconfig.php' BUT without php
        $this->mergeConfigFrom(
            __DIR__.'/config/aymancontactconfig.php', 'aymancontactconfig'
        );


        # to make user do some config to your package
        # to make view also be customized by user
        $this->publishes([
            __DIR__.'/config/aymancontactconfig.php' => config_path('aymancontactconfig.php'),
            __DIR__.'/views' => resource_path('views/vendor/aymancontactconfig'),
        ]);

    }

    public function register()
    {



    }
}
