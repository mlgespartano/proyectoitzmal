<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProductoFormRequest;
use App\Producto;
use DB;


class ProductoController extends Controller
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

            $producto=DB::table('productos')

       

            ->select('id_prod','imagen','nombre_prod','descripcion','precio','id_restaurante','estado')

            ->where('nombre_prod','LIKE','%'.$query.'%')
            ->where('id_cat','LIKE','%'.$query.'%')
           ->where('estado','=','activo')
            ->orderBy('id_prod','asc')
            ->paginate(8);
            return view('restaurante.productos.index',["producto"=>$producto,"searchText"=>$query]);
        }
    }
    public function create()
    {
         $categoria=DB::table('categorias')->where('id_cat','<>','0')->get();
        return view("restaurante.productos.create",["categoria"=>$categoria]);
    }
    public function store (ProductoFormRequest $request)
    {

     $producto=new Producto;
        $producto->id_prod=$request->get('id_prod');
if (Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
        $producto->imagen=$file->getClientOriginalName(); }
        $producto->nombre_prod=$request->get('nombre_prod');
        $producto->descripcion=$request->get('descripcion');
        $producto->precio=$request->get('precio');
        $producto->estado='activo';
        $producto->id_cat=$request->get('id_cat');
        $producto->id_restaurante='1';
        
       
        $producto->save();
        return Redirect::to('restaurante/productos');

    }
    public function show($id)
    {
        return view("restaurante.productos.show",["producto"=>Producto::findOrFail($id)]);
    }
    public function edit($id)
    {
       $producto=Producto::findOrFail($id);
        $categoria=DB::table('categorias')->where('id_cat','<>','0')->get();
        return view("restaurante.productos.edit",["producto"=>$producto,"categoria"=>$categoria]);
    }
    
    
    public function update(ProductoFormRequest $request,$id)
    {
         $producto= Producto::findOrFail($id);
       
        if (Input::hasFile('imagen')){
            $file=Input::file('imagen');
            $file->move(public_path().'/imagenes/productos/',$file->getClientOriginalName());
        $producto->imagen=$file->getClientOriginalName();
        }
        $producto->nombre_prod=$request->get('nombre_prod');
        $producto->descripcion=$request->get('descripcion');
        $producto->precio=$request->get('precio');
        $producto->estado='activo';
        $producto->id_restaurante=$request->get('id_restaurante');
        $producto->id_cat=$request->get('id_cat');
        $producto->update();
        return Redirect::to('restaurante/productos');
        }




    public function destroy($id)
    {
        $producto=Producto::findOrFail($id);
        $producto->estado='inactivo';
        $producto->update();
        return Redirect::to('restaurante/productos');
    }
}
