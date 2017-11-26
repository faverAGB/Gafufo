<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable=[
	    'Nit', 
	    'RazonSocial', 
	    'Telefono', 
	    'Direccion', 
	    'codigo_ciudad',
];
}
