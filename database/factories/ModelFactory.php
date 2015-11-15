<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => 'Demo Account',
        'email' => 'demo@tutelagesystems.com',
        'password' => bcrypt('welcome'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Post::class, function(Faker\Generator $faker){
    return [
        'slug'    => $faker->slug,
        'title'   => $faker->text(10),
        'content' => $faker->text(60),
    ];
});

$factory->define(App\Category::class, function(Faker\Generator $faker){
    return [
        'name' => $faker->firstName()
    ];
});