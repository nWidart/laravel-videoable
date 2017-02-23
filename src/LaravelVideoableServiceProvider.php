<?php

namespace Nwidart\LaravelVideoable;

use Illuminate\Support\ServiceProvider;

class LaravelVideoableServiceProvider extends ServiceProvider
{
    public function register()
    {
    }

    public function boot()
    {
        if (! class_exists('CreateVideosTable')) {
            // Publish the migration
            $timestamp = date('Y_m_d_His', time());
            $this->publishes([
                __DIR__ . '/../database/migrations/create_video_table.php.stub' => $this->app->databasePath() . '/migrations/' . $timestamp . '_create_videos_table.php',
            ], 'migrations');
        }
    }
}
