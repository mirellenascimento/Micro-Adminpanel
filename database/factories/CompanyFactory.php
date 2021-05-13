<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->company(),
        'email' => $faker->email(),
        'logo' => 'https://picsum.photos/id/'.rand(1,100).'/600',
        'website' => $faker->domainName(),
    ];
});
