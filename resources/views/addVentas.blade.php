@extends('layout')

@section('contenido')
<form method="POST" action="add/form">
 <table class="table table-striped"> 
  <thead>
    <tr>
      <th>ID</th>
      <th>Producto</th>
      <th>Cantidad</th>
      <th>Precio</th>
    </tr>
  </thead>
  <tbody>

      <tr>
        <td><label for="ID"></label></td>
        <td><label for="Producto"></label></td>
        <td><label for="Cantidad"></label></td>
        <td><label for="Monto"></label></td>
      </tr>

  </tbody>
</table>

<form class="form-group">
  <div class="form-group">
    <label for="Total">Total :</label>
        <label for="MTotal"> </label>
  </div>
  <div class="form-group">
    <label for="InputProd">Producto</label>
    <input type="text" class="form-control" id="InputProd" placeholder="001">
  </div>
  <div class="form-group">
    <label for="InputCantidad">Cantidad</label>
    <input type="text" class="form-control" id="InputCantidad" placeholder="99">
  </div>
  <button type="submit" class="btn btn-default">Agregar</button>
    <div class="form-group">

</form>
@stop
