<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function prestamos(){
    	return	$this->hasMany(Prestamo::class);
    }
}
