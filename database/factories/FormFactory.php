<?php

use Faker\Generator as Faker;

$factory->define(App\Form::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'email' => $faker->unique()->email,
        'mobile' => $faker->phoneNumber,
        'dob' => $faker->dateTimeBetween('1990-01-01','2012-12-31'),
        'gender' => $faker->randomElement(['male', 'female']),
        'comments' => $faker->paragraph,
    ];
});
