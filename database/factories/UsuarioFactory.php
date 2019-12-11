<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Model\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'direccion' => $faker->address,

    ];
});
