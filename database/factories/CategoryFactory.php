<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    $Vartitle = $faker->sentence(4);
    return [
        //
    	'name' => $Vartitle,
    	'slug' => str_slug($Vartitle),
    	'body' => $faker->text(500),
    ];
});
