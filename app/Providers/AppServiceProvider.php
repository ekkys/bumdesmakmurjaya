<?php

namespace App\Providers;

use App\Models\Home;
use App\Models\Kontak;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        // Paksa penggunaan HTTPS di lingkungan produksi
        if ($this->app->environment('production')) {
            URL::forceScheme('https');
        }

        // View Composer untuk website views
        View::composer('website.*', function ($view) {
            try {
                if (Schema::hasTable('home') && Schema::hasTable('kontaks')) {
                    $home = Home::first();
                    $kontaks = Kontak::all();
                    $realVisitors = 0;
                    if (Schema::hasTable('visitors')) {
                        $realVisitors = \App\Models\Visitor::count();
                    }
                    $view->with([
                        'home' => $home,
                        'kontaks' => $kontaks,
                        'realVisitors' => $realVisitors,
                    ]);
                }
            } catch (\Throwable $e) {
                // Ignore during migrations or initial setup
            }
        });
    }
}
