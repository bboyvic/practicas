<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detalleprestamo extends Model
{
    public function libro(){
    	return	$this->belongsTo(Libro::class);
    }

    public function prestamo(){
    	return	$this->belongsTo(Prestamo::class);
    }
}
