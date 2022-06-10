<div>
   <br>
    <br>
    {{-- The whole world belongs to you. --}}
    {{-- Hola --}}
    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2">
                            <input type="text" class="form-control" placeholder="Search" wire:model="search">
                        </div>
                        <div class="col">

                            <a href="{{ route('addSoliEspecial') }}"><button type="button" class="btn btn-success"
                                    style="float: right;">Nuevo</button></a>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Descripcion Solicitud</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($soliespeciales as $key => $value)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $value->description }}</td>
                                    <td>{{ $value->estado }}</td>
                    
                                    
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal" data-whatever="@mdo"
                                            wire:click="edit({{ $value->id }})">Editar</button>
                                        
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal2"
                                        wire:click="delete({{ $value->id  }})">Eliminar</button>
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
    {{-- MODAL --}}
    <div class="modal fade" id="exampleModal" wire:ignore.self tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editando</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        
                        <div class="form-group">
                            <label for="link">Link de Shein:</label>
                            <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="Ingresar Link de Shein" wire:model="link">
                            @error('link') <span class="text-danger">{{ $message }}</span> @enderror  
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción (Talla, Color):</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Ingresar descripcion" wire:model="description">
                            @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" placeholder="Ingresar dirección" wire:model="direccion">
                            @error('direccion') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="departamento">Departamento:</label>
                            <select name="departamento" id="departamento" wire:model="departamento">
                                <option value="" selected>Seleccione el departamento</option>
                                @foreach ($departamentos as $departamento)
                                    <option value="{{ $departamento->id }}">{{ $departamento->DepName }}</option>
                                @endforeach
                            </select>
                        </div>
                         @if (!is_null($municipios))
                        <div class="form-group">
                            <label for="municipio">Municipio:</label>
                            <select name="municipio" id="municipio" wire:model="municipio">
                                <option value="" selected>Seleccione el municipio</option>
                                @foreach ($municipios as $municipio)
                                    <option value="{{ $municipio->id }}">{{ $municipio->MunName }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="puntoReferencia">Punto de referencia:</label>
                            <input type="text" class="form-control @error('puntoReferencia') is-invalid @enderror" id="puntoReferencia" placeholder="Ingresar punto de referencia" wire:model="punto_referencia">
                            @error('puntoReferencia') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                         <div class="form-group">
                            <label for="nombre">Nombres:</label>
                            <input type="text" class="form-control @error('nombres') is-invalid @enderror" id="nombre" placeholder="Ingresar nombres" wire:model="nombre_adicional">
                            @error('nombres') <span class="text-danger"> {{ $message }} </span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="apellido">Apellidos:</label>
                            <input type="text" class="form-control @error('apellido') is-invalid @enderror" id="apellido" placeholder="Ingresar apellidos" wire:model="apellido_adicional">
                            @error('apellido') <span class="text-danger"> {{ $message }} </span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="telefono">Telefono:</label>
                            <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" placeholder="Ingresar teléfono" wire:model="telefono">
                            @error('telefono') <span class="text-danger"> {{ $message }} </span> @enderror
                        </div>
        

                        {{-- <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div> --}}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" wire:click="save_edit()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="delete_now()" class="btn btn-danger close-modal"
                        data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .form-control {
        color: black;
    }
</style>
