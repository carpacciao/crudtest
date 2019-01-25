<?php

use Faker\Generator as Faker;

$factory->define(App\Reservation::class, function (Faker $faker) {
    return [
        'date_from' => $faker->date(),
        'date_to' => $faker->date(),
        'address' => $faker->streetAddress,
        'from_user' => $faker->name(),
    ];
});
