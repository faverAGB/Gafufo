<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
	    'codigo_pedido', 'cliente_id', 'fecha_elaboracion', 'fecha_entrega', 'ciudad_id', 'total',
	];
	public function cliente()
    {
        return $this->belongsTo('App\Cliente', 'cliente_id');
    }
	public function ciudad()
    {
        return $this->belongsTo('App\Ciudad', 'ciudad_id');
    }
}
