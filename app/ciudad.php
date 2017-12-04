<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
     protected $fillable = [
    	'codigo_postal', 'nombre_ciudad',
    ];

}
