<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProductoFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            
            'imagen'=>'mimes:jpeg,bmp,png',
            'nombre_prod'=>'required|max:100',
            'descripcion'=>'max:100',
            'precio'=>'numeric',
            
            'id_cat'=>'required'
        ];
    }
}

