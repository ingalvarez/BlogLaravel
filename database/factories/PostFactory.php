<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    $Vartitle = $faker->sentence(4);
    return [
        //
    	'user_id' 		=> rand(1,10),
    	'category_id' 	=> rand(1,10),
    	'name' 			=> $Vartitle,
    	'slug' 			=> str_slug($Vartitle),
    	'excerpt' 		=> $faker->text(200),
    	'title' 		=> $faker->text(500),
    	'file' 			=> $faker->imageUrl($width=1200, $height=400),
    	'status' 		=> $faker->randomElement(['DRAFT','PUBLISHED']),
    ];
});
