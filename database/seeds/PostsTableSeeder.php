<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Ejecuta el Factory y crea 40 Posts. Cada registro lo relaciona con una etiqueta. 
    	//Para este caso cada registro o post se relaciona con 3 tags.
        factory(App\Post::class, 40)->create()->each(function(App\Post $post){

        	$post->tags()->attach([
        		rand(1,5),
        		rand(6,10),
        		rand(11,15)
        	]);

        }); 
    }
}
