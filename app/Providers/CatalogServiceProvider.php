<?php

namespace App\Providers;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;

/**
 * Class CatalogServiceProvider
 * @package App\Providers
 */
class CatalogServiceProvider extends ServiceProvider
{
    /**
     * @throws BindingResolutionException
     */
    public function register()
    {
        $this->app->make('view')->composer('layouts.sections.catalog', 'App\Http\ViewComposers\CatalogComposer');
    }
}
