<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RestauranteFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           // 'id_restaurante' =>'required',
            'nombre_resta'=>'required|max:100',
            'nombre_propietario'=>'required|max:100',
            'telefono_resta'=>'required|numeric',
            'direccion'=>'required|max:100',
            'correo_resta'=>'max:100'
            
        ];
    }
}
