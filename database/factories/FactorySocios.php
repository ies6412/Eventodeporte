<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\socio;
use Illuminate\Support\Str;





$factory->define(Socio::class, function (Faker $faker) {
    return [
        'nombre' => $faker->name,
        'cedula' => $faker->buildingNumber,
    ];
});
