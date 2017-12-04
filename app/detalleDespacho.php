<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetalleDespacho extends Model
{
    protected $fillable = [
   		'producto_id', 'despacho_id', 'cantidad_producto', 'costo_subtotal',
   	];
   	public function producto()
    {
        return $this->belongsTo('App\Producto', 'producto_id');
    }
    public function despacho()
    {
        return $this->belongsTo('App\Despacho', 'despacho_id');
    }
}
