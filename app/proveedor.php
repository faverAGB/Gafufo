<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $fillable=[
	    'codigo_producto',
		'descripcion',
		'clase_producto',
		'precio',
];
}
