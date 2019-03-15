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
        $this->app->make('view')->composer('page.index', 'App\Http\ViewComposers\IconComposer');
    }
}
