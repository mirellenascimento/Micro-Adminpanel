<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company(),
        'email' => $faker->email(),
        'logo' => $faker->imageUrl($width = 640, $height = 480),
        'website' => $faker->domainName(),
    ];
});
