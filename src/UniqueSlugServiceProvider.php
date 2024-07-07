<?php
namespace Ashumizi\LaravelUniqueSlug;

use Illuminate\Support\ServiceProvider;

class UniqueSlugServiceProvider extends ServiceProvider
{
    public function boot() {
        
    }
    public function register()
    {
        $this->app->bind("laravel-unique-slug",function ($app) {
            return new \Ashumizi\LaravelUniqueSlug\UniqueSlug();
        });
    }
}