<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'logo' => $faker->imageUrl,
      'date_of_admission' => $faker->randomNumber,
    ];
});
