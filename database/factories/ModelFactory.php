<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\personas::class, function (Faker\Generator $faker) {
    return [
        'Nombre' 		=> $faker->firstName,
	    'Direccion'		=> $faker->address,
	    'Telefono'		=> $faker->phoneNumber,
	    'Edad'			=> $faker->numberBetween($min = 1, $max = 100),
    ];
});
