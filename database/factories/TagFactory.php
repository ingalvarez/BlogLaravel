<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    $Vartitle = $faker->unique()->word(5); //Título único de 5 caracteres
    return [
        //
    	'name' => $Vartitle,
    	'slug' => str_slug($Vartitle),
    ];
});
