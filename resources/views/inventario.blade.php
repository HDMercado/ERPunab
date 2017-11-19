@extends('layout')

@section('contenido')

<div class="row">
  <div class="col-md-3 col-md-offset-9 text-right">
    <a class="btn btn-default fa fa-plus" href="{{ request()->path() }}/add" role="button"> Agregar</a>
    <a class="btn btn-default fa fa-remove" href="{{ request()->path() }}/delete" role="button"> Quitar</a>
  </div>
</div>

<div class="row">
<table class="table table-hover">
  <thead>
    <tr>
      <th>#</th>
      <th>Nombre producto</th>
      <th>Cantidad</th>
      <th>Valor c/u</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Silla</td>
      <td>30</td>
      <td>130000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>mouse</td>
      <td>50</td>
      <td>15000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Teclado</td>
      <td>45</td>
      <td>125000</td>
    </tr>
    <th scope="row">4</th>
      <td>Pantalla</td>
      <td>30</td>
      <td>100000</td>
    </tr>
    <th scope="row">5</th>
      <td>Gabinete</td>
      <td>15</td>
      <td>130000</td>
    </tr>
  </tbody>
</table>
</div>

@stop

