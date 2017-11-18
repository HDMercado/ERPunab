@extends('layout')

@section('contenido')
<table class="table table-striped"> 
  <thead>
    <tr>
      <th>ID Producto</th>
      <th>Nombre Producto</th>
      <th>Stock</th>
    </tr>
  </thead>
  <tbody>

      <tr>
        <td><label for="IDProducto "></label></td>
        <td><label for="NomProducto"></label></td>
        <td><label for="Cantidad"></label></td>
      </tr>

  </tbody>
</table>

<form class="form-group">
  <div class="form-group">
  </div>
  <div class="form-group">
    <label for="InputIDProducto">ID Producto</label>
    <input type="text" class="form-control" id="InputIDProducto" placeholder="NombreP">
  </div>
  <div class="form-group">
    <label for="InputStock">Stock</label>
    <input type="text" class="form-control" id="InputStock" placeholder="999">
  </div>
  <button type="submit" class="btn btn-default">Eliminar</button>
    <div class="form-group">

</form>
@stop
