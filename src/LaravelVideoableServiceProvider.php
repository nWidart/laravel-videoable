<?php

namespace Nwidart\LaravelVideoable;

use Illuminate\Support\ServiceProvider;

class LaravelVideoableServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/laravel-videoable.php', 'laravel-videoable'
        );
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'laravel-videoable');

        if ($this->app->runningInConsole()) {
            if (! class_exists('CreateVideosTable')) {
                $timestamp = date('Y_m_d_His', time());
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_video_table.php.stub' => $this->app->databasePath() . '/migrations/' . $timestamp . '_create_videos_table.php',
                ], 'migrations');
            }

            $this->publishes([
                __DIR__.'/../config/laravel-videoable.php' => config_path('laravel-videoable.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/laravel-videoable'),
            ], 'views');
        }
    }
}
