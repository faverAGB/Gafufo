<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetallePedido extends Model
{
    protected $fillable = [
    	'producto_id', 'pedido_id', 'cantidad_producto', 'costo_subtotal',
    ];
    public function producto()
    {
        return $this->belongsTo('App\Producto', 'producto_id');
    }
    public function pedido()
    {
        return $this->belongsTo('App\Pedido', 'pedido_id');
    }
}
