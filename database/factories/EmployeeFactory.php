<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastname(),
        'phone' => $faker->phoneNumber(),
        'email' => $faker->email(),
        'company_id' => $faker->numberBetween($min = 1, $max = 10)
    ];
});
