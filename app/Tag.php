<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['name', 'slug'];

	
    //Función que indica a laravel la relación entre la entidad Categories y Posts.
    public function posts(){

    	return $this->belongsToMany(Post::class); 
    }
}
