<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable = [
	    'codigo_producto', 'descripcion', 'proveedor_id', 'clase_id', 'precio',
	];

	public function proveedor()
    {
        return $this->belongsTo('App\Proveedor', 'proveedor_id');
    }
    public function clase()
    {
        return $this->belongsTo('App\Clase', 'clase_id');
    }
}
