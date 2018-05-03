<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'slug', 'body'];

	
    //Función que indica a laravel la relación entre la entidad Categories y Posts. En este caso de 1 a muchos
    public function posts(){

    	return $this->hasMany(Post::class); 
    }
}
