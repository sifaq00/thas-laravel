<?php


namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Filament\Facades\Filament;
use Carbon\Carbon;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    // Force HTTPS in production
    if (config('app.env') === 'production') {
        URL::forceScheme('https');
    }

    config(['app.timezone' => 'Asia/Jakarta']);
    date_default_timezone_set('Asia/Jakarta');
    Carbon::setLocale('id');
    Filament::serving(function () {
        Filament::registerRenderHook(
            'global-render-timezone',
            function () {
                return response()
                    ->header('Content-Timezone', 'Asia/Jakarta');
            }
        );
    });

    }
}
