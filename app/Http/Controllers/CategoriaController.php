<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\CategoriaFormRequest;
use App\Categoria;
use DB;

class CategoriaController extends Controller
{
    public function __construct()
    {
       
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));
            $categoria=DB::table('categorias')
            ->where('nombre_cat','LIKE','%'.$query.'%')
            
            ->orderBy('id_cat','asc')
            ->paginate(10);

            return view('restaurante.categorias.index',["categoria"=>$categoria,"searchText"=>$query]);    }
    }
    public function create()
    {
        return view("recepcionista.categorias.create");
    }
    public function store (CategoriaFormRequest $request)
    {
        $categoria=new Categoria;
        $categoria->nombre_cat=$request->get('nombre_cat');
        
        $categoria->save();
        return Redirect::to('restaurante/categorias');

    }
    public function show($id)
    {
       
    }
    public function edit($id)
    {

    $categoria=Categoria::findOrFail($id);

        return view("restaurante.categorias.edit")
        ->with("categoria",$categoria);
    }
    
    
    public function update(CategoriaFormRequest $request,$id)
    {
        $categoria=Categoria::findOrFail($id);

      
        $categoria->nombre_cat=$request->get('nombre_cat');
    
        $categoria->update();
        return Redirect::to('restaurante/categorias');
    }
    public function destroy($id)
    {
       
    }
}