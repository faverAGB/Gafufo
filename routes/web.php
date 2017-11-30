<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('clientes', 'ClienteController');
Route::resource('ciudads', 'CiudadController');
Route::resource('clases', 'ClaseController');
Route::resource('proveedors', 'ProveedorController');
Route::resource('pedidos', 'PedidoController');
Route::resource('productos', 'ProductoController');
Route::resource('despachos', 'DespachoController');
