@extends('layout')

@section('contenido')
<form method="POST" action="add/form">
  <div class="form-group">
    <label for="NombreProducto">Nombre producto</label>
    <input type="text" class="form-control" name="NombreProducto" placeholder="Nombre del producto" value="{{ old('NombreProducto') }}">
    <span id="helpBlock2" class="help-block">{{ $errors->first('NombreProducto') }}</span>
  </div>
  <div class="form-group">
    <label for="CantidadProducto">Cantidad/Unidades</label>
    <input type="number" class="form-control" name="CantidadProducto" placeholder="Cantidad del producto" value="{{ old('CantidadProducto') }}">
    <span id="helpBlock2" class="help-block">{{ $errors->first('CantidadProducto') }}</span>
  </div>
  <div class="form-group">
    <label for="ValorProducto">Valor</label>
    <input type="number" class="form-control" name="ValorProducto" placeholder="Valor del producto" value="{{ old('ValorProducto') }}">
    <span id="helpBlock2" class="help-block">{{ $errors->first('ValorProducto') }}</span>
  </div>
  <button type="submit" class="btn btn-default">Agregar</button>
</form>

@stop
