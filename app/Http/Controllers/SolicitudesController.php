<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\SolicitudesFormRequest;
use App\Solicitudes;
use DB;

class SolicitudesController extends Controller
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
            ->where('estado','=','sinprocesar')
            ->orderBy('id_reserva','desc')
            ->paginate(5);
            return view('recepcionista.solicitud.index')
            ->with("reserva", $reserva);
        }
    }
    public function create()
    {
        return view('recepcionista.solicitud.create');
    }
    public function store (SolicitudesFormRequest $request)
    {
        $reservas=new Solicitudes;
        $reservas->id_reserva=$request->get('id_reserva');
        $reservas->tipo_reser=$request->get('tipo_reser');
        $reservas->nombre_cliente=$request->get('nombre_cliente');
        $reservas->tel=$request->get('tel');
        $reservas->correo=$request->get('correo');
        $reservas->fecha=$request->get('fecha');
        $reservas->hora=$request->get('hora');
        $reservas->num_pax=$request->get('num_pax');
        $reservas->direccion_banquete=$request->get('direccion_banquete');
        $reservas->estado='sinprocesar';
        $reservas->save();
        return Redirect::to('recepcionista/solicitud');

    }
    public function show($id)
    {
        
    }
    public function edit($id)
    {

        $solicitudes=Solicitudes::findOrFail($id);

        return view('recepcionista.solicitud.edit')
        ->with("solicitudes",$solicitudes);
       
    }
    
    
    public function update(SolicitudesFormRequest $request,$id)
    {
        $solicitudes=Solicitudes::findOrFail($id);

        $solicitudes->tipo_reser=$request->get('tipo_reser');
        $solicitudes->nombre_cliente=$request->get('nombre_cliente');
        $solicitudes->tel=$request->get('tel');
        $solicitudes->correo=$request->get('correo');
        $solicitudes->fecha=$request->get('fecha');
        $solicitudes->hora=$request->get('hora');
        $solicitudes->num_pax=$request->get('num_pax');
        $solicitudes->direccion_banquete=$request->get('direccion_banquete');
       
        $solicitudes->update();
        return Redirect::to('recepcionista/solicitud');
    }
    public function destroy($id)
    {
        $solicitudes=Solicitudes::findOrFail($id);
        $solicitudes->estado='procesado';
        $solicitudes->update();
        return Redirect::to('recepcionista/solicitud');
    }
}