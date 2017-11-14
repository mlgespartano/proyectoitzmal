<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\GaleriaFormRequest;
use App\Galeria;
use DB;

class GaleriaController extends Controller
{
   public function __construct()
    {
       $this->middleware('auth');
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));

            $galeria=DB::table('galerias as g')

            ->join('restaurantes as r','g.id_restaurante','=','r.id_restaurante')

            ->select('g.id_gal','g.imagen_gal','r.nombre_resta as restaurante','g.descripcion_gal','g.id_restaurante','g.estado_gal')

            ->where('g.id_gal','LIKE','%'.$query.'%')
           ->where('estado_gal','=','activo')
            ->orderBy('g.id_gal','asc')
            ->paginate(8);
            return view('restaurante.galerias.index',["galeria"=>$galeria,"searchText"=>$query]);
        }
    }
    public function create()
    {
        $restaurante=DB::table('restaurantes')->where('estado_res','=','activo')->get();
        return view("restaurante.galerias.create",["restaurante"=>$restaurante]);
    }
    public function store (GaleriaFormRequest $request)
    {
        $galeria=new Galeria;
        $galeria->id_gal=$request->get('id_gal');
        
        if (Input::hasFile('imagen_gal')){
            $file=Input::file('imagen_gal');
            $file->move(public_path().'/imagenes/galeria/',$file->getClientOriginalName());
        $galeria->imagen_gal=$file->getClientOriginalName(); }
        $galeria->descripcion_gal=$request->get('descripcion_gal');
        
        $galeria->estado_gal='Activo';
        $galeria->id_restaurante=$request->get('id_restaurante');
        
       
        $galeria->save();
        return Redirect::to('restaurante/galerias');

    }
    public function show($id)
    {
        return view("restaurante.galerias.show",["galerias"=>Galeria::findOrFail($id)]);
    }
    public function edit($id)
    {       //Buscar en la tabla
        $galeria=Galeria::findOrFail($id);
        $restaurante=DB::table('restaurantes')->where('estado_res','=','activo')->get();
        return view("restaurante.galerias.edit",["galeria"=>$galeria,"restaurante"=>$restaurante]);

    }
    
    
    public function update(GaleriaFormRequest $request,$id)
    {
        $galeria= Galeria::findOrFail($id);
       
        if (Input::hasFile('imagen_gal')){
            $file=Input::file('imagen_gal');
            $file->move(public_path().'/imagenes/galeria/',$file->getClientOriginalName());
        $galeria->imagen_gal=$file->getClientOriginalName();
        }
        $galeria->descripcion_gal=$request->get('descripcion_gal');
         $galeria->id_restaurante=$request->get('id_restaurante');
        $galeria->estado_gal='activo';
        $galeria->update();
        return Redirect::to('restaurante/galerias');

    }
    public function destroy($id)
    {
        $galeria=Galeria::findOrFail($id);
        $galeria->estado_gal='Inactivo';
        $galeria->update();
        return Redirect::to('restaurante/galerias');
    }
}
