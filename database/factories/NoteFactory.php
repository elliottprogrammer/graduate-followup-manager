<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Note::class, function (Faker $faker) {
    return [
        'graduate_id' => function () {
            return factory(App\Graduate::class)->create()->id;
        },
        'date' => $faker->dateTimeBetween($startDate = '-4 days', $endDate = '-1 days', $timezone = null),
        'contacted' => $faker->randomElement($array = array(0, 1)),
        'note' => $faker->text($maxNbChars = 200)
    ];
});
