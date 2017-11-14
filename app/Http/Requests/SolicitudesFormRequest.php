<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SolicitudesFormRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
          
        'tipo_reser'=>'required|max:50',
        'nombre_cliente'=>'required|max:130',
        'tel'=>'required|numeric',
        'correo'=>'required|max:70',
        'fecha'=>'required',
        'hora'=>'required',
        'num_pax'=>'required|numeric',
        'direccion_banquete'=>'required|max:100',
       


        ];
    }
}