@extends('layout')

@section('contenido')
<table class="table table-striped"> 
  <thead>
    <tr>
      <th>ID Venta</th>
      <th>Fecha</th>
      <th>Monto</th>
    </tr>
  </thead>
  <tbody>

      <tr>
        <td><label for="IDVenta "></label></td>
        <td><label for="Fecha"></label></td>
        <td><label for="Monto"></label></td>
      </tr>

  </tbody>
</table>

<form class="form-group">
  <div class="form-group">
  </div>
  <div class="form-group">
    <label for="InputIDVenta">ID Venta</label>
    <input type="text" class="form-control" id="InputIDVenta" placeholder="001">
  </div>
  <button type="submit" class="btn btn-default">Eliminar</button>
    <div class="form-group">

</form>
@stop
