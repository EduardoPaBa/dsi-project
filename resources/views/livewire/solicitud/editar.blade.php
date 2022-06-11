<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <br><br>
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
                                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#solicitudModal" wire:click="verDetalleSolicitud({{ $solicitud->id }})">Ver</button>
                                        </td>
                                        <td>{{ $solicitud->estado }}</td>
                                        <td>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarModal" wire:click="edit({{ $solicitud->id }})">Editar</button>
                                            <button type="button" class="btn btn-danger" onclick="deleteSolicitud({{$solicitud->id}})">Eliminar</button>
                                        </td>
                                    </tr>
                                @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <script>
                function deleteSolicitud(id){
                    if(confirm("¿Está seguro que desea eliminar la solicitud?"))
                        window.livewire.emit('deleteSolicitud',id);
                }
            </script>
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
                                <!--<input type="text" class="form-control" value="{{ $solicitud->departamento }}" disabled>-->
                                <input type="text" class="form-control" value="{{ $nombre_departamento }}" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label>Municipio:</label>
                                <!--<input type="text" class="form-control" value="{{ $solicitud->municipio }}" disabled>-->
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
</div>
