<div style="float: center; margin: 1rem">
    {{-- Success is as dangerous as failure. --}}
    <br><br>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <div class="row" style="padding-bottom: 15px">
        <div class="col">
        </div>
        
        <div class="col-7">
            <div class="card">
                <div class="card-body">
                        
                    <div class="form-group mb-3">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" placeholder="Ingresar dirección" wire:model="direccion">
                        @error('direccion') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="departamento">Departamento:</label>
                        <select name="departamento" id="departamento" wire:model="departamento">
                            <option value="" selected></option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}">{{ $departamento->DepName }}</option>
                            @endforeach
                        </select>
                        @error('departamento') <span class="text-danger"> {{ $message }} </span> @enderror
                    </div>
                    
                    @if (!is_null($municipios))
                    <div class="form-group mb-3">
                        <label for="municipio">Municipio:</label>
                        <select name="municipio" id="municipio" wire:model="municipio">
                            <option value="" selected></option>
                            @foreach ($municipios as $municipio)
                                <option value="{{ $municipio->id }}">{{ $municipio->MunName }}</option>
                            @endforeach
                        </select>
                        @error('municipio') <span class="text-danger"> {{ $message }} </span> @enderror
                    </div>
                    @endif
        
                    <div class="form-group mb-3">
                        <label for="puntoReferencia">Punto de referencia:</label>
                        <input type="text" class="form-control @error('punto_referencia') is-invalid @enderror" id="puntoReferencia" placeholder="Ingresar punto de referencia" wire:model="punto_referencia">
                        @error('punto_referencia') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
        
                    <div class="form-group mb-3">
                        <label for="nombre">Nombres:</label>
                        <input type="text" class="form-control @error('nombre_adicional') is-invalid @enderror" id="nombre" placeholder="Ingresar nombres" wire:model="nombre_adicional">
                        @error('nombre_adicional') <span class="text-danger"> {{ $message }} </span> @enderror
                    </div>
        
                    <div class="form-group mb-3">
                        <label for="apellido">Apellidos:</label>
                        <input type="text" class="form-control @error('apellido_adicional') is-invalid @enderror" id="apellido" placeholder="Ingresar apellidos" wire:model="apellido_adicional">
                        @error('apellido_adicional') <span class="text-danger"> {{ $message }} </span> @enderror
                    </div>
        
                    <div class="form-group mb-3">
                        <label for="telefono">Telefono:</label>
                        <input type="text" class="form-control @error('telefono') is-invalid @enderror" id="telefono" placeholder="Ingresar teléfono" wire:model="telefono">
                        @error('telefono') <span class="text-danger"> {{ $message }} </span> @enderror
                    </div>
        
                    <div class="d-grid gap-2">
                        <button type="button" wire:click="save()" class="btn btn-primary">Enviar solicitud</button>
                        <a href="{{ route('editSolicitud') }}">
                            <button type="button" class="btn btn-primary">Ver mis solicitudes</button>
                        </a>
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
        <div class="col">
        </div>
    </div>
</div>
