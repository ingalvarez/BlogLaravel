<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
 	
	protected $fillable = ['user_id', 'category_id', 'name', 'slug', 'excerpt', 'title', 'status', 'file'];

	//Función que indica a laravel la relación entre la entidad Posts y Users. En este caso de pertenencia
    public function user(){

    	return $this->belongsTo(User::class); 
    }

    //Función que indica a laravel la relación entre la entidad Posts y Categories. En este caso de pertenencia
    public function category(){

    	return $this->belongsTo(Category::class); 
    }

    //Función que indica a laravel la relación entre la entidad Posts y Tags. En este caso Muchos a muchos
    public function tags(){

    	return $this->belongsToMany(Tag::class)->withTimestamps(); 
    }
}
