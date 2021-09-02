<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('cliente','ClienteController@index');
Route::get('compra','CompraController@index');
Route::get('compradetalle','CompraDetalleController@index');
Route::get('detalleventa','DetalleVentaController@index');
Route::get('productos','ProductosController@index');
Route::get('proveedores','ProveedoresController@index');
Route::get('usuario','UsuarioController@index');
Route::get('ventas','VentasController@index');
