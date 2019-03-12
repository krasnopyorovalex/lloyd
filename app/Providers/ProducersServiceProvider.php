<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class ProducersServiceProvider
 * @package App\Providers
 */
class ProducersServiceProvider extends ServiceProvider
{
    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function register()
    {
        $this->app->make('view')->composer('*', 'App\Http\ViewComposers\ProducerComposer');
    }
}
