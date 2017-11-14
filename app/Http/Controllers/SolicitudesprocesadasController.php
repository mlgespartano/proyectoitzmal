<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\SolicitudesFormRequest;
use App\Solicitudes;
use DB;

class SolicitudesprocesadasController extends Controller
{
    public function __construct()
    {
       
    }
    public function index(Request $request)
    {
        if ($request)
        {
            $valor=trim($request->get('searchText'));
            $reserva=DB::table('reservas')
            ->where('nombre_cliente','LIKE',"%$valor%")
            ->where('estado','=','procesado')
            ->orderBy('id_reserva','desc')
            ->paginate(5);
            return view('recepcionista.solicitud.indexprocesada')
            ->with("reserva", $reserva);
        }
    }
    
}