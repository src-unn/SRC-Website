<?php

namespace App\Providers;

use App\Models;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /**
         * Polymorphic Relationships Morph-Map
         */
        Relation::morphMap([
            'entry' => Models\Entry::class,
            'author' => Models\Author::class,
            'dept' => Models\Department::class,
            'inst' => Models\Institution::class,
            'pubs' => Models\Publisher::class,
        ]);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //Bugsnag
        $this->app->alias('bugsnag.logger', \Illuminate\Contracts\Logging\Log::class);
        $this->app->alias('bugsnag.logger', \Psr\Log\LoggerInterface::class);
    }
}
