<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RestauranteFormRequest;
use App\Restaurante;
use DB;

class RestauranteclienteController extends Controller
{
    public function __construct()
    {
       
    }
    public function index(Request $request)
    {
        if ($request)
        {   //Obtengo el formulario el valor que fue escrito en el camponente searchText
            $query=trim($request->get('searchText'));
             //Cargamos los datos de la tabla 
            $restaurante=DB::table('restaurantes')
           //Aqui estamos resiviendo el valor que nos mandaron para realizar la busqueda
            ->where('nombre_resta','LIKE','%'.$query.'%')
            //Aqui estamos haciendo una condicon para que puedan aparecer los datos
            ->orderBy('id_restaurante','desc')
            ->paginate(5);
            return view('restaurante.registro.indexcliente',["restaurante"=>$restaurante,"searchText"=>$query]);
        }
    }

}
