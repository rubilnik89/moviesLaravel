<?php

namespace App\Modules\Movie\Providers;

use App\Modules\Movie\Services\Movie;
use Illuminate\Support\ServiceProvider;
use App\Modules\Movie\Services\MovieInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(MovieInterface::class, Movie::class);
    }
}
