<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$factory->define(Car::class, function (Faker $faker) {
    return [
        'make' => $faker->randomElement(['Honda', 'Suzuki', 'BMW']),
        'model' => $faker->randomElement(['X7', 'CRV', 'Civic', 'X5', 'X2']),
        'produced_on' => now(),
        'email' => $faker->unique()->safeEmail,
    ];
});
