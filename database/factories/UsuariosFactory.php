<?php

use Faker\Generator as Faker;

$factory->define(App\Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'telefono' => $faker->phoneNumber,
    ];
});
