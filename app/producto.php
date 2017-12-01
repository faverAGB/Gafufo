<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    protected $fillable = [
	    'codigo_producto', 'descripcion', 'proveedor_id', 'clase_id', 'precio',
	];

	public function proveedor()
    {
        return $this->belongsTo('App\proveedor', 'proveedor_id');
    }
    public function clase()
    {
        return $this->belongsTo('App\clase', 'clase_id');
    }
}
