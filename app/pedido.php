<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $fillable = [
	    'codigo_pedido', 'cliente_id', 'proveedor_id', 'fecha_elaboracion', 'fecha_entrega', 'ciudad_id',
	];
}
