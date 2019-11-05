<?php

namespace Orkhanahmadov\LaravelCommentable;

use Illuminate\Support\ServiceProvider;

class LaravelCommentableServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('commentable.php'),
            ], 'config');

            if (! class_exists('CreateCommentableTable')) {
                $this->publishes([
                    __DIR__.'/../database/migrations/commentable_table.php.stub' => database_path('migrations/'.date('Y_m_d_His', time()).'_create_commentable_table.php'),
                ], 'migrations');
            }
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'commentable');
    }
}
