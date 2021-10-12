<?php

namespace EskayAmadeus\LaravelAuthPackage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class LaravelAuthPackageServiceProvider extends ServiceProvider
{
  public function register()
  {
    // Register config as laravel-auth-package-config
    $this->mergeConfigFrom(__DIR__.'/../config/laravel-auth-package.php', 'laravel-auth-package-config');
  }

  public function boot()
  {
    // MIGRATIONS
    if ($this->app->runningInConsole()) {
      // Export the migration
      if (! class_exists('CreateUsersTable')) {
        $this->publishes([
          __DIR__ . '/../database/migrations/create_users_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_users_table.php'),
          // you can add any number of migrations here
        ], 'migrations'); // migrations tag
      }
    }
    // ROUTES
    $this->registerRoutes();
    // CONFIG
    if ($this->app->runningInConsole()) {

      $this->publishes([
        __DIR__.'/../config/laravel-auth-package.php' => config_path('laravel-auth-package.php'),
      ], 'config');
  
    }
  }

  protected function registerRoutes()
  {
      Route::group($this->routeConfiguration(), function () {
          $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
      });
  }

  // allow package users to make use of a Route prefix and middleware
  protected function routeConfiguration()
  {
      return [
          'prefix' => config('laravel-auth-package-config.prefix'),
          'middleware' => config('laravel-auth-package-config.middleware'),
      ];
  }
}