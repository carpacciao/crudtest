<?php

use Faker\Generator as Faker;

$factory->define(App\Article::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'text' => $faker->text(),
        'site' => $faker->url,
        'image' => $faker->imageUrl($width = 640, $height = 480),
        'date' => $faker->dateTime($max = 'now', $timezone = null)
    ];
});
