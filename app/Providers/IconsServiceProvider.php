<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class IconsServiceProvider
 * @package App\Providers
 */
class IconsServiceProvider extends ServiceProvider
{
    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        $this->app->make('view')->composer('*', 'App\Http\ViewComposers\IconComposer');
    }
}
