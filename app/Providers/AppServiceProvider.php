<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use FakerRestaurant\Restaurant;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
    //     //
    //         $this->app->singleton('Faker', function($app) {
    //          $faker = \Faker\Factory::create();
    //          $faker->addProvider(new Restaurant($faker));

    //         return $faker;
    // });

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
