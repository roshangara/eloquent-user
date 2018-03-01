<?php

namespace Roshangara\EloquentUser;

use Illuminate\Support\ServiceProvider;

class EloquentUserServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../migrations');
    }
}
