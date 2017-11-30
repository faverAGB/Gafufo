<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = [
	    'codigo_producto', 'descripcion', 'clase_id', 'precio',
	];
}
