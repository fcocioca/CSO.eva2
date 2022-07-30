@extends('layouts.master')


@section('content')

El Nombre del producto  : {{$sucursal}}
<h4>Sucursales</h4>
<select class="form-select" aria-label="Default select example">
  <option selected>Seleccione Sucural</option>
  <option value="1">Santiago Centro</option>
  <option value="2">Pudahuel</option>
  <option value="3">San Bernardo</option>
  <option value="4">La Florida</option>
 
</select>


@stop