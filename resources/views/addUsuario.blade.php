@extends('layout')

@section('contenido')
<form method="POST" action="add/form">
  <div class="form-group">
    <label for="RutUsuario">Rut</label>
    <input type="text" class="form-control" name="RutUsuario" placeholder="11.111.111-1" value="{{ old('RutUsuario') }}">
    <span id="helpBlock2" class="help-block">{{ $errors->first('RutUsuario') }}</span>
  </div>
  <div class="form-group">
    <label for="NombreUsuario">Nombre</label>
    <input type="text" class="form-control" name="NombreUsuario" placeholder="Nombre" value="{{ old('NombreUsuario') }}">
    <span id="helpBlock2" class="help-block">{{ $errors->first('NombreUsuario') }}</span>
  </div>
  <div class="form-group">
    <label for="ApellidoUsuario">Apellido</label>
    <input type="text" class="form-control" name="ApellidoUsuario" placeholder="Apellido" value="{{ old('ApellidoUsuario') }}">
    <span id="helpBlock2" class="help-block">{{ $errors->first('ApellidoUsuario') }}</span>
  </div>
  <div class="form-group">
    <label for="EmailUsuario">E-mail</label>
    <input type="email" class="form-control" name="EmailUsuario" placeholder="example@mail.com" value="{{ old('EmailUsuario') }}">
    <span id="helpBlock2" class="help-block">{{ $errors->first('EmailUsuario') }}</span>
  </div>
  <button type="submit" class="btn btn-default">Agregar</button>
</form>
@stop
