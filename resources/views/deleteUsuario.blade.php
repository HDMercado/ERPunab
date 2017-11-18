@extends('layout')

@section('contenido')
<table class="table table-striped"> 
  <thead>
    <tr>
      <th>ID Usuario</th>
      <th>Rut Ususario</th>
      <th>Nombre Usuario</th>
    </tr>
  </thead>
  <tbody>

      <tr>
        <td><label for="IDUsusario "></label></td>
        <td><label for="RutUsuario"></label></td>
        <td><label for="NomUsusario"></label></td>
      </tr>

  </tbody>
</table>

<form class="form-group">
  <div class="form-group">
  </div>
  <div class="form-group">
    <label for="InputIDUduario">ID Usuario</label>
    <input type="text" class="form-control" id="InputIDUsuario" placeholder="001">
  </div>
  <button type="submit" class="btn btn-default">Eliminar</button>
    <div class="form-group">

</form>
@stop
