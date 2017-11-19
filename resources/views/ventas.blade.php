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
      <th>Fecha</th>
      <th>Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>14/10/2017</td>
      <td>300000</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>15/11/2017</td>
      <td>125000</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>11/11/2017</td>
      <td>525000</td>
    </tr>
  </tbody>
</table>
</div>

@stop
