<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despacho extends Model
{
    protected $fillable = [
		'codigo_despacho', 'proveedor_id', 'fecha_elaboracion', 'fecha_entrega', 'ciudad_id', 'total',
	];
	public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'proveedor_id');
    }
	public function ciudad()
    {
        return $this->belongsTo('App\Ciudad', 'ciudad_id');
    }
}
