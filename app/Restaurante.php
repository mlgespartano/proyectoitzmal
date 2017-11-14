<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    //
    //Apuntar a un tabla

    protected $table='restaurantes';
    //especificar ñla clave primaria
    protected $primaryKey='id_restaurante';
    //Deshabilitar marcado de registross
    public $timestamps=false;
//Definir campos que tendran algun valor
    protected $fillable=[
        'id_restaurante',
    	'nombre_resta',
    	'nombre_propietario',
    	'telefono_resta',
        'direccion',
    	'correo_resta',
        'estado_res'
    ];
}
