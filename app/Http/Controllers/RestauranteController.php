<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\RestauranteFormRequest;
use App\Restaurante;
use DB;

class RestauranteController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
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
            return view('restaurante.registro.index',["restaurante"=>$restaurante,"searchText"=>$query]);
        }
    }
    public function create()
    {
        return view("restaurante.registro.create");
    }
    public function store (RestauranteFormRequest $request)
    {
        $restaurante=new Restaurante;
        $restaurante->nombre_resta=$request->get('nombre_resta');
        $restaurante->nombre_propietario=$request->get('nombre_propietario');
        $restaurante->telefono_resta=$request->get('telefono_resta');
        $restaurante->direccion=$request->get('direccion');
        $restaurante->correo_resta=$request->get('correo_resta');
        $restaurante->estado_res='activo';
        $restaurante->save();
        return Redirect::to('restaurante/registro');

    }
    public function show($id)
    {
        return view("restaurante.registro.show",["restaurante"=>Restaurante::findOrFail($id)]);
    }
    public function edit($id_restaurante)
    {

    $restaurante=Restaurante::findOrFail($id_restaurante);

        return view("restaurante.registro.edit")
        ->with("restaurante",$restaurante);
    }
    
    
    public function update(RestauranteFormRequest $request,$id)
    {
        $restaurante=Restaurante::findOrFail($id);

        $restaurante->nombre_resta=$request->get('nombre_resta');
        $restaurante->nombre_propietario=$request->get('nombre_propietario');
        $restaurante->telefono_resta=$request->get('telefono_resta');
        $restaurante->direccion=$request->get('direccion');
        $restaurante->correo_resta=$request->get('correo_resta');
        $restaurante->estado_res='activo';
        $restaurante->update();
        return Redirect::to('restaurante/registro');
    }
    



    public function destroy($id)
    {
        $restaurante=Restaurante::findOrFail($id);
        $restaurante->estado_res='inactivo';
        $restaurante->update();
        return Redirect::to('restaurante/registro');
    }
}
