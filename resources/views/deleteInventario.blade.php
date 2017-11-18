@extends('layout')

@section('contenido')
<h1>Contenido {{ request()->path() }}</h1>
@stop
