<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Trademark;
use Faker\Generator as Faker;

$factory->define(Trademark::class, function (Faker $faker) {
    return [
      'name' => $faker->company,
      'logo' => $faker->imageUrl,
      'number_of_locations' => $faker->randomNumber,
    ];
});
