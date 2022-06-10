<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <br><br>
    <div class="row">
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
                                <th scope="col">Aprobada</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($solicitudes as $solicitud)
                                <tr>
                                    <td>{{ $solicitud->id }}</td>
                                    <td>
                                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#solicitudModal" wire:click="verDetalleSolicitud({{ $solicitud->id }})">Ver</button>
                                    </td>
                                    <td>
                                        <label class="switch">
                                            <input id="{{ $solicitud->id }}" type="checkbox" wire:model="valor_checkbox" wire:click="saveEstado({{ $solicitud->id }})">
                                            <span class="slider round"></span> 
                                        </label>
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

    <!-- MODAL -->
    <div class="modal fade" id="solicitudModal" wire:ignore.self tabindex="-1" role="dialog"
    aria-labelledby="solicitudModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="solicitudModalLabel">Detalles de la solicitud: {{ $solicitud->estado }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <div class="form-group mb-3">
                            <label>Dirección:</label>
                            <input type="text" class="form-control" value="{{ $solicitud->direccion }}" disabled>
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
                            <input type="text" class="form-control" value="{{ $solicitud->punto_referencia }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group mb-3">
                            <label>Nombres:</label>
                            <input type="text" class="form-control" value="{{ $solicitud->nombre_adicional }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group mb-3">
                            <label>Apellidos:</label>
                            <input type="text" class="form-control" value="{{ $solicitud->apellido_adicional }}" disabled>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="form-group mb-3">
                            <label>Teléfono:</label>
                            <input type="text" class="form-control" value="{{ $solicitud->telefono }}" disabled>
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

    <style>
        .switch {
          position: relative;
          display: inline-block;
          width: 60px;
          height: 34px;
        }
        
        .switch input { 
          opacity: 0;
          width: 0;
          height: 0;
        }
        
        .slider {
          position: absolute;
          cursor: pointer;
          top: 0;
          left: 0;
          right: 0;
          bottom: 0;
          background-color: #ccc;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        .slider:before {
          position: absolute;
          content: "";
          height: 26px;
          width: 26px;
          left: 4px;
          bottom: 4px;
          background-color: white;
          -webkit-transition: .4s;
          transition: .4s;
        }
        
        input:checked + .slider {
          background-color: #2196F3;
        }
        
        input:focus + .slider {
          box-shadow: 0 0 1px #2196F3;
        }
        
        input:checked + .slider:before {
          -webkit-transform: translateX(26px);
          -ms-transform: translateX(26px);
          transform: translateX(26px);
        }
        
        /* Rounded sliders */
        .slider.round {
          border-radius: 34px;
        }
        
        .slider.round:before {
          border-radius: 50%;
        }
    </style>
</div>
