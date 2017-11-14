<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ProductoFormRequest;
use App\Producto;
use DB;


class ProductoclientebebidaController extends Controller
{
    public function __construct()
    {
       
    }
    public function index(Request $request)
    {
        if ($request)
        {
             $query=trim($request->get('searchText'));

            $producto=DB::table('productos')

       

            ->select('id_prod','imagen','nombre_prod','descripcion','precio','id_restaurante','estado')

            ->where('id_prod','LIKE','%'.$query.'%')
           ->where('estado','=','activo')
           ->where('id_cat','=','2')

            ->orderBy('id_prod','asc')
            ->paginate(8);
            return view('restaurante.productos.indexclientebebida',["producto"=>$producto,"searchText"=>$query]);
        

        }
    }
}