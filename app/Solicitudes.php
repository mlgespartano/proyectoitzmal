<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitudes extends Model
{
    protected $table='reservas';

    protected $primaryKey='id_reserva';

    public $timestamps=false;


    protected $fillable =[
        'id_reserva',
    	'tipo_reser',
    	'nombre_cliente',
    	'tel',
        'correo',
        'fecha',
        'hora',
    	'num_pax',
        'direccion_banquete',
    	'estado'
    ];

}
