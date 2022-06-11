<div class="" style="float: center; margin: 1rem; ">
   <br>
    <br>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
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
                                <th scope="col">Link de Shein</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($soliespeciales as $key => $value)
                            
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $value->description }}</td>
                                    <td >
                                    
                                    <a target="_blank" href="https://{{ $value->link }}" >
                                    
                                        {{ $value->link }}
                                    </a>
                                
                                    </td>
                                    <td>{{ $value->estado }}</td>
                    
                                    
                                    <td >
                                        
                                         @if ($value->estado !== "APROBADA" && $value->estado !== "DENEGADA")
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal" data-whatever="@mdo"
                                                wire:click="edit({{ $value->id }})" >Editar</button>
                                                <br>
                                            
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#exampleModal2"
                                            wire:click="delete({{ $value->id  }})">Eliminar</button>
                                        
                                        @else($value->estado == "APROBADA" && $value->estado == "DENEGADA")
                                            <button type="button" class="btn btn-primary" data-toggle="modal"
                                                data-target="#exampleModal" data-whatever="@mdo"
                                                wire:click="edit({{ $value->id }})"disabled="true" >Editar</button>
                                                <br>
                                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#exampleModal2"
                                            wire:click="delete({{ $value->id  }})" disabled="true">Eliminar</button>
                                        @endif
                                         
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
                            <input type="url" name="url" class="form-control" id="link" placeholder="https://www.shein.com/" pattern="https:\/\/[a-zA-Z\.\/-]+" size="255" minlength="10" maxlength="255" wire:model="link" >
                                @error('link') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción (Talla, Color):</label>
                            <input type="text" class="form-control" id="description" placeholder="Ingresar descripcion" wire:model="description" >
                            @error('description') <span class="mt-1 error">{{ $message }}</span> @enderror
                            
                        </div>
                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Ingresar dirección" wire:model="direccion" >
                            @error('direccion') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="departamento">Departamento:</label>
                            <select name="departamento" id="departamento" wire:model="departamento">
                                <option value="" selected>Seleccione el departamento</option>
                                @foreach ($departamentos as $depart)
                                    <option value="{{ $depart->id }}" 
                                        @foreach ($soliespecial as $soli)
                                            @if ($soli->departamento == $depart->id)
                                            {{'selected="selected"'}}
                                            @endif 
                                         @endforeach>

                                        
                                        {{ $depart->DepName }}
                                    
                                    </option>
                                @endforeach
                            </select>
                            <br>
                            @error('departamento') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                         @if (!is_null($municipios))
                        <div class="form-group">
                            <label for="municipio">Municipio:</label>
                            <select name="municipio" id="municipio" wire:model="municipio">
                                <option value="" selected>Seleccione el municipio</option>
                                @foreach ($municipios as $muni)
                                    <option value="{{ $muni->id }}"
                                        @foreach ($soliespecial as $soli)
                                            @if ($soli->municipio == $muni->id)
                                            {{'selected="selected"'}}
                                            @endif 
                                         @endforeach>{{ $muni->MunName }}</option>
                                @endforeach
                            </select>
                            <br>
                            @error('municipio') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="puntoReferencia">Punto de referencia:</label>
                            <input type="text" class="form-control" id="puntoReferencia" placeholder="Ingresar punto de referencia" wire:model="punto_referencia" >
                            @error('punto_referencia') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                         <div class="form-group">
                            <label for="nombre">Nombres:</label>
                            <input type="text" class="form-control" id="nombre" placeholder="Ingresar nombres" wire:model="nombre_adicional" >
                            @error('nombre_adicional') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="apellido">Apellidos:</label>
                            <input type="text" class="form-control" id="apellido" placeholder="Ingresar apellidos" wire:model="apellido_adicional" >
                            @error('apellido_adicional') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="telefono">Telefono:</label>
                            <input type="text" class="form-control" id="telefono" placeholder="Ingresar teléfono" wire:model="telefono">
                            @error('telefono') <span class="mt-1 error">{{ $message }}</span> @enderror
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
    .content-centrado {
        background-color: #fafafa;
        margin: 1rem;
        padding: 1rem;
        /* border: 2px solid #ccc; */
        /* IMPORTANTE */
        text-align: center;
    }

    .campo:last-child {
        justify-content: flex-end;
    }

    .form-control {
        color: black;
    }
    .error{
        color: red;
    }
</style>

