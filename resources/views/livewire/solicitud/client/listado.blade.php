<div>
    {{-- The Master doesn't talk, he acts. --}}

    <br><br>
 {{--
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
--}}
    <div class="row" style="padding-bottom: 15px">
        <div class="col">
        </div>

        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Solicitudes</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($solicitudes as $solicitud)
                                    <tr>
                                        <td>{{ $solicitud->id }}</td>
                                        <td>
                                            {{-- <button type="button" class="btn btn-info" data-toggle="modal"
                                                data-target="#solicitudModal" wire:click="verDetalleSolicitud({{ $solicitud->id }})">Ver</button> --}}
                                            <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                                data-target="#solicitudModal" wire:click="verDetalleSolicitud({{ $solicitud->id }})">Mi info de Contacto</button>

                                            <button type="button" class="btn btn-outline-secondary" data-toggle="modal"
                                                data-target="#solicitudModal2" wire:click="getDatosProductos({{ $solicitud->id }})">Productos Seleccionados</button>
                                        </td>
                                        <td>{{ $solicitud->estado }}</td>
                                        <td>
                                            {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarModal" wire:click="edit({{ $solicitud->id }})">Editar</button> --}}
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminarSolicitud" wire:click="delete({{ $solicitud->id }})">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col">
        </div>
    </div>

    <!-- MODAL VER SOLICITUD -->
    <div class="modal fade" id="solicitudModal" wire:ignore.self tabindex="-1" role="dialog"
        aria-labelledby="solicitudModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="solicitudModalLabel">Detalles de la solicitud: {{ $estado }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Dirección:</label>
                                <input type="text" class="form-control" value="{{ $direccion }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Departamento:</label>

                                <input type="text" class="form-control" value="{{ $nombre_departamento }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Municipio:</label>

                                <input type="text" class="form-control" value="{{ $nombre_municipio }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Punto de referencia:</label>
                                <input type="text" class="form-control" value="{{ $punto_referencia }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Nombres:</label>
                                <input type="text" class="form-control" value="{{ $nombre_adicional }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Apellidos:</label>
                                <input type="text" class="form-control" value="{{ $apellido_adicional }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Teléfono:</label>
                                <input type="text" class="form-control" value="{{ $telefono }}" disabled>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>


    {{-- MODAL PRODUCTOS --}}
    <div wire:ignore.self class="modal fade" id="solicitudModal2"  tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Detalles de los productos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    @foreach ($productos as $item)
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Nombre</th>
                                   <!-- <th scope="col">Descripción</th> -->
                                    <th scope="col">Talla</th>
                                    <th scope="col">Precio</th>
                                    <th scope="col">Cantidad</th>
                                    <th scope="col">Accion</th>
                                  </tr>
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">{{$item->producto->name}}</th>
                                    <!-- <td>{{$item->producto->description}}</td> -->
                                    <td>{{$item->producto->talla}}</td>
                                    <td>{{$item->producto->precio}}</td>
                                    <td>{{$item->cantidad}}</td>
                                    <td>
                                        <button type="button" class="btn btn-danger"
                                        data-bs-dismiss="modal" data-dismiss="modal"
                                        wire:click="deleteP({{ $item->id }})" >Eliminar</button>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                        </div>
                    </div>
                    @endforeach
                    Total: ${{$ttoals}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" id="solicitudModal22" wire:ignore.self>
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Detalles de los productos</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @foreach ($productos as $item)
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Nombre</th>
                               <!-- <th scope="col">Descripción</th> -->
                                <th scope="col">Talla</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Accion</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">{{$item->producto->name}}</th>
                                <!-- <td>{{$item->producto->description}}</td> -->
                                <td>{{$item->producto->talla}}</td>
                                <td>{{$item->producto->precio}}</td>
                                <td>{{$item->cantidad}}</td>
                                <td>
                                    <button type="button" class="btn btn-danger"
                                    data-bs-dismiss="modal"
                                    wire:click="deleteP({{ $item->id }})" >Eliminar</button>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                    </div>
                </div>
                @endforeach
                Total: ${{$ttoals}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>




    <!-- MODAL EDITAR SOLICITUD -->
    <div class="modal fade" id="editarModal" wire:ignore.self tabindex="-1" role="dialog"
    aria-labelledby="editarModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editarModalLabel">Detalle la solicitud: {{ $estado }}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Dirección:</label>
                                <input wire:model="direccion" type="text" class="form-control" value="{{ $direccion }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="departamento">Departamento:</label>
                                <select name="departamento" id="departamento" wire:model="departamento">
                                    <option value="" selected></option>
                                    @foreach ($departamentos as $departamento)
                                        <option value="{{ $departamento->id }}">{{ $departamento->DepName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            @if (!is_null($municipios))
                            <div class="form-group mb-3">
                                <label for="municipio">Municipio:</label>
                                <select name="municipio" id="municipio" wire:model="municipio">
                                <option value="" selected></option>
                                @foreach ($municipios as $municipio)
                                    <option value="{{ $municipio->id }}">{{ $municipio->MunName }}</option>
                                @endforeach
                                </select>
                            </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Punto de referencia:</label>
                                <input wire:model="punto_referencia" type="text" class="form-control" value="{{ $punto_referencia }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Nombres:</label>
                                <input wire:model="nombre_adicional" type="text" class="form-control" value="{{ $nombre_adicional }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Apellidos:</label>
                                <input wire:model="apellido_adicional" type="text" class="form-control" value="{{ $apellido_adicional }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Teléfono:</label>
                                <input wire:model="telefono" type="text" class="form-control" value="{{ $telefono }}">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button wire:click.prevent="update()" class="btn btn-success" data-dismiss="modal">Guardar</button>
                    <button wire:click="cancel()" type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL ELIMINAR SOLICITUD -->
    <div wire:ignore.self class="modal fade" id="eliminarSolicitud" tabindex="-1" role="dialog"
        aria-labelledby="eliminarSolicitudLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eliminarSolicitudLabel">Confirmar eliminación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Está seguro que desea eliminar la solicitud?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                    <button type="button" wire:click.prevent="delete_now()" class="btn btn-danger close-modal"
                        data-dismiss="modal">Sí, eliminar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL ELIMINAR Producto
    <div wire:ignore.self class="modal fade" id="eliminarProducto" tabindex="-1" role="dialog"
        aria-labelledby="eliminarProductoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eliminarProductoLabel">Confirmar eliminación</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>¿Está seguro que desea eliminar el producto?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Cerrar</button>
                    <button type="button" wire:click.prevent="delete_nowP()" class="btn btn-danger close-modal"
                        data-dismiss="modal">Sí, eliminar</button>
                </div>
            </div>
        </div>
    </div> -->



    @if(Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Felicidades!',
                text: '{{ Session::get("success") }}'
            })
        </script>
    @endif
</div>
<style>
    .form-control {
        color: black;
    }
</style>
