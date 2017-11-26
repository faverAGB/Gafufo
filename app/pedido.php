<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $fillable=[
	    'codigo_pedido',
		'codigo_cliente',
		'codigo_proveedor',
		'fecha_elaboracion',
		'fecha_entrega',
		'codigo_ciudad',
];
}
