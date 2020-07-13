<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Kiwi;
use Faker\Generator as Faker;

$factory->define(Kiwi::class, function (Faker $faker) {
    return [
        'body' => $faker->paragraph,
        'user_id' => factory(App\User::class)
    ];
});
