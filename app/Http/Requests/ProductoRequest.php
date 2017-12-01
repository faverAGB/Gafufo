<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigo_producto' => 'required', 
            'descripcion' => 'required', 
            'proveedor_id' => 'required', 
            'clase_id' => 'required', 
            'precio' => 'required'
        ];
    }
}
