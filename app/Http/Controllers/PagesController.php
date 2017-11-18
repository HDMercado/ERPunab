<?php

namespace ERPunab\Http\Controllers;

use Illuminate\Http\Request;
use ERPunab\Http\Requests\CreateMessageRequest;

class PagesController extends Controller
{
    public function login()
    {
      return view('index');
    }

    public function home()
    {
      return view('home');
    }

    // INVENTARIO
    public function inventario(){
      return view('inventario');
    }

    public function addInventario(){
      return view('addInventario');
    }

    public function deleteInventario(){
      return view('deleteInventario');
    }
    public function mensajeInventario(Request $request){

      $this->validate($request, [
        'NombreProducto' => 'required',
        'CantidadProducto' => 'required',
        'ValorProducto' => 'required'
      ]);

      return 'enviado';

    }

    // VENTAS
    public function ventas(){
      return view('ventas');
    }

    public function addVentas(){
      return view('addVentas');
    }

    public function deleteVentas(){
      return view('deleteVentas');
    }

    public function mensajeVentas(Request $request){
      $this->validate($request, [
        'IdProducto' => 'required',
        'RutVenta' => 'required',
        'Cantidad' => 'required'
      ]);
      return 'enviado';
    }

    // USUARIOS
    public function usuarios(){
      return view('usuarios');
    }

    public function addUsuario(){
      return view('addUsuario');
    }

    public function deleteUsuario(){
      return view('deleteUsuario');
    }

    public function mensajeUsuarios(CreateMessageRequest $request){
      return $request->all();
    }


}
