<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $fillable = [
	    'nit', 'razon_social', 'telefono', 'direccion',	'ciudad_id',
	];
}
