<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class despacho extends Model
{
    protected $fillable=[
		'codigo_despacho',
		'codigo_proveedor',
		'fecha_elaboracion',
		'fecha_entrega',
		'codigo_ciudad',
		'codigo_ciudad',
];
}
