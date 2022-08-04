@extends('layouts.master')
@section('title','Listado de Productos')
@section('content')
<br>


<div class="container mt-3">
  <h2>Listado Productos</h2>
  <p>reivsa el listado:</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Codigo Producto</th>
        <th>Nombre Producto</th>
        <th>Valor</th>
        <th>Categoria</th>
        <th>Sucursal</th>
        <th>Cantidad</th>
        <th>Descripcion</th>
        <th>Accion</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($productos as $producto)
      <tr>
        <td>{{$producto->codigo}}</td>
        <td>{{$producto->nombreP}}</td>
        <td>5000</td>
        <td>{{$producto->categorias_id}}</td>
        <td>{{$producto->sucursales_id}}</td>
        <td>500</td>
        <td>{{$producto->descripcion}}</td>
        <td><a href="" class="btn btn-outline-secondary">Editar</a></td>
      </tr>
  @endforeach
 
    </tbody>
  </table>
</div>



<br>

@stop