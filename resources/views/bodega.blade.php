@extends('layouts.master')
@section('title','Sucursales')

@section('content')


<h4>Sucursales</h4>
<div class="container mt-3">
  <h2>Listado de Sucursales</h2>
  <p></p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Nombre Sucursal</th>
        <th>Direccion Sucursal</th>
        <th>Accion</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($sucursales as $sucursal)
      <tr>
        <td>{{$sucursal->nombreSucursal}}</td>
        <td>{{$sucursal->direccion}}</td>

        <td><a href="" class="btn btn-outline-secondary">Editar</a></td>
      </tr>
  @endforeach
 
    </tbody>
  </table>
</div>



@stop