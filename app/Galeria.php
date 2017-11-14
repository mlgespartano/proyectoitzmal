<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeria extends Model
{
    //
     protected $table='galerias';

    protected $primaryKey='id_gal';

    public $timestamps=false;


    protected $fillable =[
    	
    	'imagen_gal',
    	'descripcion_gal',
        'id_restaurante',
        'estado_gal'
    	
        
    ];
}
