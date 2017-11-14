<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class GaleriaFormRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           // datos requeridos para Editar en el formulario
           
            'imagen_gal'=>'mimes:jpeg,bmp,png',
            'descripcion_gal'=>'required|max:250'
            
            
         /////////////////////////////////////////////////////7

        ];
    }
}
