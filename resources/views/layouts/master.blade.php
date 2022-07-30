<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Principal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
   

  <!-- heder -->
  @section('heder')

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand">C.S.O. (Control Stock Online)</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ingresaP">Ingresar Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="eliminaP">Eliminar Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="listarProducto">Lista de Productos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bodega">Sucursales</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  @show

<!-- body -->
<div class="container">
        @yield('content')

</div>
<!-- footer -->


@section('footer')

<div class="container-fluid p-5 my-5 bg-dark text-white" >
<center>
  <h4>Framework seccion 51</h4><h4> Profesor: Victor Cofre</h4> <br>
  <p> Integrantes: <br>Leasy Tapia Fernandez <br>Isaac Aillapan Tapia <Br>Francisco Cocio Cancino  </p>
</center>
</div>

@show

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>