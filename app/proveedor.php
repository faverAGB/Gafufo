<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    protected $fillable = [
	    'nit', 'razon_social', 'telefono', 'direccion',	'ciudad_id',
	];

	public function ciudad()
    {
        return $this->belongsTo('App\ciudad', 'ciudad_id');
    }
}
