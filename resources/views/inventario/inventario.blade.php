
@extends('layout')
@section('content')
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
                            <th scope="col-2">Genero</th>
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
                            <td>{{$inven->genero}}</td>
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

@endsection