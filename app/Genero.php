<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
     public function libros(){
    	return	$this->hasMany(Libro::class);
    }
}
