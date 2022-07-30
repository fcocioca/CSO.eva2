@extends('layouts.master')
@section('content')
<br>
<p>Ingresa productos</p>

<form method="post" action="">
<div class="mb-3">
    <label for="txtCodigo" class="form-label">Codigo Producto:</label>
    <input type="text" class="form-control" id="txtCodigo" placeholder="THX1138" name="txtNombre" >
  </div>
  <div class="mb-3">
    <label for="txtNombre" class="form-label">Nombre Producto:</label>
    <input type="text" class="form-control" id="txtNombre" placeholder="Indique el nombre del producto" name="txtNombre" >
  </div>
  <div class="mb-3">
    <label for="txtValor" class="form-label">Valor:</label>
    <input type="number" class="form-control" id="txtValor" placeholder="9999" name="txtValor" >
  </div>
  <div class="mb-3">
    <label for="slctCategoria" class="form-label">Categoria:</label>
    <select class="form-select" id="slctValor" name="slctCategoria">
      <option>A</option>
      <option>B</option>
      <option>C</option>
      <option>D</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="slctSucursal" class="form-label">Sucursal(opcional):</label>
    <select class="form-select" id="slctSucursal" name="slctSucursal">
      <option>Sucursal 1</option>
      <option>Sucursal 2</option>
      <option>Sucursal 3</option>
      <option>Sucursal 4</option>
    </select>
  </div>
  <div class="mb-3">
    <label for="txtCantidad" class="form-label">Cantidad:</label>
    <input type="number" class="form-control" id="txtCantidad" placeholder="9999" name="txtCantidad" >
  </div>
  <!-- <div class="form-check mb-3"> -->

  <button type="submit" class="btn btn-success">Agregar Producto</button>
  @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>  
    </div>
  @endif
</form>

<br>
@stop