<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detalleDespacho extends Model
{
    protected $fillable = [
   		'producto_id', 'despacho_id', 'cantidad_producto', 'costo_total',
   	];
}
