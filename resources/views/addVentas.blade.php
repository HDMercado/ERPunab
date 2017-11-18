@extends('layout')

@section('contenido')
<form method="POST" action="add/form">
  <div class="form-group">
    <label for="IdProducto">Producto</label>
    <input type="number" class="form-control" name="IdProducto" placeholder="0001" value="{{ old('IdProducto') }}">
    <span id="helpBlock2" class="help-block">{{ $errors->first('IdProducto') }}</span>
  </div>
  <div class="form-group">
    <label for="RutVenta">Rut</label>
    <input type="text" class="form-control" name="RutVenta" placeholder="11111111-1" value="{{ old('RutVenta') }}">
    <span id="helpBlock2" class="help-block">{{ $errors->first('RutVenta') }}</span>
  </div>
  <div class="form-group">
    <label for="Cantidad">Cantidad</label>
    <input type="number" class="form-control" name="Cantidad" placeholder="99" value="{{ old('Cantidad') }}">
    <span id="helpBlock2" class="help-block">{{ $errors->first('Cantidad') }}</span>
  </div>
  <button type="submit" class="btn btn-default">Agregar</button>
</form>
@stop
