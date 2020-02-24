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
    <h1>inventario libros</h1>
<!-- boten de Modal -->
    <br>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregar">
        Agregar
    </button>
    <br>
<!-- listar -->
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
                          @foreach ($inventario as $inven)
                          <tr>
                          <th scope="row">{{$inven->id_libro}}</th>
                            <td>{{$inven->nombre}}</td>
                            <td>{{$inven->descripcion}}</td>
                            <td>{{$inven->npagina}}</td>
                            <td>{{$inven->edicion}}</td>
                            <td>{{$inven->autor}}</td>
                            <td>{{$inven->precio}}</td>
                            <td>  
                              <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#editar">
                              editar
                              </button><br>
                              <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#eliminar">
                                eliminar
                            </button>
                          </td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>

                </div>
            </div>
        </div>
    </div>
</div>



<!-- Modal agregar-->
<div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          
        <form action="{{url('inventario')}}" method="POST">
                @csrf

                <div class="form-group">
                    <input type="text" name="nombre" id="nombre" class="form-control" placeholder="nombre del libro" required>
                </div>
                <div class="form-group">
                    <input type="text" name="descripcion" id="descripcion" class="form-control" placeholder="descripcion del libro" required>
                </div>
                <div class="form-group">
                    <input type="text" name="npaginas" id="npaginas" class="form-control" placeholder="numero de paginas del libro" required>
                </div>
                <div class="form-group">
                  <input type="text" name="edicion" id="edicion" class="form-control" placeholder="numero de edicion del libro" required>
              </div>
                <div class="form-group">
                    <input type="text" name="autor" id="autor" class="form-control" placeholder="autor del libro" required>
                </div>
                <div class="form-group">
                    <input type="text" name="precio" id="precio" class="form-control" placeholder="precio del libro" required>
                </div>
            

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
      </form>
      @if (session('inventario'))
      <div class="alert alert-success mt-3">
        {{session('inventario')}}
      </div>
      @endif
      </div>
    </div>
  </div>

  <!-- modal eliminar-->

<div class="modal fade" id="eliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal editar -->
<div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>