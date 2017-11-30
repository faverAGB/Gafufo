<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ciudad extends Model
{
     protected $fillable = [
    	'codigo_postal', 'nombre_ciudad',
    ];

}
