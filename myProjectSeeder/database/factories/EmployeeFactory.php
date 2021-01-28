<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'lastname' => $faker->lastName,
      'date_of_admission' => $faker->date,
    ];
});
