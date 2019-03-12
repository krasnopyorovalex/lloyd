<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ProjectsServiceProvider
 * @package App\Providers
 */
class ProjectsServiceProvider extends ServiceProvider
{
    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        $this->app->make('view')->composer('*', 'App\Http\ViewComposers\ProjectComposer');
    }
}
