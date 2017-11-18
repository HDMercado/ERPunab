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
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
</div>

@stop
