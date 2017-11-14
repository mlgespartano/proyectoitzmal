<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::resource('inicio','ItzmalController');
Route::resource('login/','AuthController');


Route::resource('kinich/restaurante','KinichController');
Route::resource('restaurante/registro','RestauranteController');
Route::resource('restaurante/galerias','GaleriaController');
Route::resource('restaurante/productos','ProductoController');
Route::resource('restaurante/categorias','CategoriaController');

Route::resource('recepcionista/solicitud','SolicitudesController');
Route::resource('recepcionista/solicitudprocesada','SolicitudesprocesadasController');

Route::resource('cliente/restaurantes','RestauranteclienteController');
Route::resource('cliente/solicitudes','SolicitudesclienteController');

Route::resource('cliente/galerias','GaleriaclienteController');

Route::resource('cliente/productosplatillo','ProductoclienteplatilloController');
Route::resource('cliente/productosbebida','ProductoclientebebidaController');
Route::resource('cliente/productospostre','ProductoclientepostreController');



Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
