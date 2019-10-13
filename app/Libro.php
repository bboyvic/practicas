<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $table = 'libros';
    protected $fillable =['clave','nombre','autor_id','genero_id','fecha','editorial_id'];

 	public function autor(){
    	return	$this->belongsTo(Autor::class);
    }
    public function editorial(){
    	return	$this->belongsTo(Editorial::class);
    }
     public function genero(){
    	return	$this->belongsTo(Genero::class);
    }
     public function detalleprestamos(){
        return  $this->hasMany(Detalleprestamo::class);
    }

}
