<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoriaFormRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
           // datos requeridos para Editar en el formulario
        
            'nombre_cat'=>'required|max:30'
            
            
         /////////////////////////////////////////////////////7

        ];
    }
}
