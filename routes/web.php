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

Route::get('/', ['as' => 'login', 'uses' => 'PagesController@login']);

Route::get('home', ['as' => 'home', 'uses' => 'PagesController@home']);

Route::get('inventario', ['as' => 'inventario', 'uses' => 'PagesController@inventario']);
Route::get('inventario/add', ['as' => 'addInventario', 'uses' => 'PagesController@addInventario']);
Route::get('inventario/delete', ['as' => 'deleteInventario', 'uses' => 'PagesController@deleteInventario']);
Route::post('inventario/add/form', ['as' => 'formInventario', 'uses' => 'PagesController@mensajeInventario']);

Route::get('ventas', ['as' => 'ventas', 'uses' => 'PagesController@ventas']);
Route::get('ventas/add', ['as' => 'addVentas', 'uses' => 'PagesController@addVentas']);
Route::get('ventas/delete', ['as' => 'deleteVentas', 'uses' => 'PagesController@deleteVentas']);
Route::post('ventas/add/form', ['as' => 'formVentas', 'uses' => 'PagesController@mensajeVentas']);


Route::get('usuarios', ['as' => 'usuarios', 'uses' => 'PagesController@usuarios']);
Route::get('usuarios/add', ['as' => 'addUsuario', 'uses' => 'PagesController@addUsuario']);
Route::get('usuarios/delete', ['as' => 'deleteUsuario', 'uses' => 'PagesController@deleteUsuario']);
Route::post('usuarios/add/form', ['as' => 'formUsuarios', 'uses' => 'PagesController@mensajeUsuarios']);
