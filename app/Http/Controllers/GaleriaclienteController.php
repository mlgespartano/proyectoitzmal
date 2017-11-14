<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


use DB;
class GaleriaclienteController extends Controller
{
public function __construct()
    {
       
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $query=trim($request->get('searchText'));

            $galeria=DB::table('galerias as g')

            ->join('restaurantes as r','g.id_restaurante','=','r.id_restaurante')

            ->select('g.id_gal','g.imagen_gal','r.nombre_resta as restaurante','g.descripcion_gal','g.id_restaurante','g.estado_gal')

            ->where('g.descripcion_gal','LIKE','%'.$query.'%')
           ->where('estado_gal','=','activo')
            ->orderBy('g.id_gal','asc')
            ->paginate(8);
            return view('restaurante.galerias.indexcliente',["galeria"=>$galeria,"searchText"=>$query]);
        }
    }
}

