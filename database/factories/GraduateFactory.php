<?php

use Faker\Generator as Faker;

$factory->define(App\Graduate::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'street_address' => $faker->streetAddress,
        'city' => $faker->city,
        'state' => $faker->stateAbbr,
        'zip' => $faker->postcode,
        'phone1' => $faker->phoneNumber,
        'alt_phone1' => $faker->tollFreePhoneNumber,
        'email1' => $faker->email,
        'gender' => $faker->randomElement($array = array('Male', 'Female')),
        'graduation_date' => $faker->dateTimeThisMonth($max = 'now', 'UTC'),
        'date_of_birth' => $faker->dateTime($max = '-19 years'),
        'condition' => $faker->randomElement($array = array('Good', 'Suspicious', 'Relapsed')),
        'last_contacted' => $faker->dateTimeThisMonth($max = 'now', 'UTC'),
        'next_call_date' => $faker->dateTimeBetween($startDate = 'now', $endDate = '+ 7 days', 'UTC'),
        'status' => 'Active',
        'fam_first_name' => $faker->firstName,
        'fam_last_name' => $faker->lastName,
        'fam_relationship' => $faker->randomElement($array = array('Mother', 'Father')),
        'fam_street_address' => $faker->streetAddress,
        'fam_city' => $faker->city,
        'fam_state' => $faker->state,
        'fam_zip' => $faker->postcode,
        'fam_phone1' => $faker->phoneNumber,
        'fam_email1' => $faker->email,
        'fam_gender' => $faker->randomElement($array = array('Male', 'Female')),
    ];
});
