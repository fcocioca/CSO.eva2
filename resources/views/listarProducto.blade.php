@extends('layouts.master')
@section('content')
<br>


<div class="container mt-3">
  <h2>Listado Prodcutos</h2>
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
  
      <tr>
        <td>thx1138</td>
        <td>PANCITO </td>
        <td>5000</td>
        <td>Alimentos</td>
        <td>Alonso de Cordoba</td>
        <td>500</td>
        <td>Producto alimenticio</td>
        <td><a href="" class="btn btn-outline-secondary">Editar</a></td>
      </tr>
 
 
    </tbody>
  </table>
</div>



<br>

@stop