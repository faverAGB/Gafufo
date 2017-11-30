<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detallePedido extends Model
{
    protected $fillable = [
    	'producto_id', 'pedido_id', 'cantidad_producto', 'costo_total',
    ];
}
