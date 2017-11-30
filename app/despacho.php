<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class despacho extends Model
{
    protected $fillable = [
		'codigo_despacho', 'proveedor_id', 'fecha_elaboracion', 'fecha_entrega', 'ciudad_id',
	];
}
