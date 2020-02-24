<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>inicio</title>
  </head>
  <body>
<!-- inicia el codigo de login -->
<ul class="nav">
    <li class="nav-item">
    <a class="nav-link" href="{{ 'inicio' }}">inicio</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ 'inventario' }}">inventario</a>
    </li>
  </ul>
<br>

<div class="container">
    <h1>listas libros</h1>
<!-- boten de Modal -->

<!-- listar -->

@foreach ($inventario as $lis)

<div class="card">
    <div class="card-header">
      <h3>{{$lis->nombre}}</h3>
    </div>
    <div class="card-body">
    <h5><strong>Descripcion</strong></h5>
    <p class="card-text">{{$lis->descripcion}}</p>
    <h4>Autor: {{$lis->autor}}</h4>
    <h3>{{$lis->precio}}</h3>
      <a href="#" class="btn btn-primary">acomprar</a>
    </div>
  </div>
  <br>
  @endforeach

<!-- tarjetas 



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <table class="table">
                        <thead>
                          <tr>
                            <div class="col-1"></div>
                            <th scope="col-1">Id</th>
                            <th scope="col-2">Nombre</th>
                            <th scope="col-2">Descripcion</th>
                            <th scope="col-2">N*pagina</th>
                            <th scope="col-1">Edicion</th>
                            <th scope="col-1">Autor</th>
                            <th scope="col-1">Precio</th>
                            <th scope="col-1">opciones</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($inventario as $lis)
                          <tr>
                          <th scope="row">{{$lis->id_libro}}</th>
                            <td>{{$lis->nombre}}</td>
                            <td>{{$lis->descripcion}}</td>
                            <td>{{$lis->npagina}}</td>
                            <td>{{$lis->edicion}}</td>
                            <td>{{$lis->autor}}</td>
                            <td>{{$lis->precio}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>
-->



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>