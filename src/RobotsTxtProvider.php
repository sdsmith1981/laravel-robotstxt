<?php
namespace Sdsmith1981\RobotsTxt;

use Illuminate\Support\ServiceProvider;

class RobotsTxtProvider extends ServiceProvider {
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot() {
         $this->publishes([
            __DIR__.'/../config/robots-txt.php' => config_path('robots-txt.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register() {
        include __DIR__ . '/routes.php';
        $this->app->make('Sdsmith1981\RobotsTxt\Controllers\RobotsTxtController');

        $this->mergeConfigFrom(__DIR__.'/../config/robots-txt.php', 'robots-txt');
    }
}
