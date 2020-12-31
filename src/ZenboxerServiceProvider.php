<?php
namespace Apsg\Zenboxer;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class ZenboxerServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {

    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        Schema::defaultStringLength(191);
    }
}
