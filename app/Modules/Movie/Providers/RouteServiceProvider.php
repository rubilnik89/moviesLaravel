<?php

namespace App\Modules\Movie\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    public const MOVIE_MODULE_PATH = 'App/Modules/Movie/';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     *
     * @return void
     */
    public function boot()
    {
        $this->routes(function () {

            Route::middleware('web')
                ->group(base_path(self::MOVIE_MODULE_PATH . 'routes/web.php'));
        });
    }
}
