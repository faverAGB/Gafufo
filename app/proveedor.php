<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
	    'nit', 'razon_social', 'telefono', 'direccion',	'ciudad_id',
	];

	public function ciudad()
    {
        return $this->belongsTo('App\Ciudad', 'ciudad_id');
    }
}
