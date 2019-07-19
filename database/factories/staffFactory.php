<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [

          'username' => $faker->name,
          'brithday' => $faker->date,
          'position'  => $faker->name,
          'division'  => $faker->word, 
          'division_id'  => $faker->number,
          'telephone' => $faker->word,
          'salary' => 20000,
    ];
});
