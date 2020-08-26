<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FacadServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('Facad', 'App\Services\ShowInfo');
    }

}
