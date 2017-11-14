<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table='productos';

    protected $primaryKey='id_prod';

    public $timestamps=false;


    protected $fillable =[
    	
    	'imagen',
    	'nombre_prod',
    	'descripcion',
    	'precio',
    	'estado',
        'id_restaurante',
        'id_cat'
    ];

    protected $guarded =[

    ];
}

