<div style="float: center; margin: 1rem">
    {{-- Success is as dangerous as failure. --}}
    <br><br>

    <div class="row" style="padding-bottom: 15px">
        <div class="col">
        </div>
        
        <div class="col-7">
            <div class="card">
                <div class="card-body">
                    <div class="form-group mb-3">
                        <label for="link">Link de Shein:</label>
                        <input type="text" class="form-control @error('link') is-invalid @enderror" id="link" placeholder="Ingresar Link de Shein" wire:model="link">
                        @error('link') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Descripción (Talla, Color):</label>
                        <input type="text" class="form-control @error('description') is-invalid @enderror" id="description" placeholder="Ingresar descripcion" wire:model="description">
                        @error('description') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>          
                    <div class="form-group mb-3">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control @error('direccion') is-invalid @enderror" id="direccion" placeholder="Ingresar dirección" wire:model="direccion">
                        @error('direccion') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="departamento">Departamento:</label>
                        <select name="departamento" id="departamento" wire:model="departamento">
                            <option value="" selected>Seleccione el departamento</option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}">{{ $departamento->DepName }}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    @if (!is_null($municipios))
                    <div class="form-group mb-3">
                        <label for="municipio">Municipio:</label>
                        <select name="municipio" id="municipio" wire:model="municipio">
                            <option value="" selected>Seleccione el municipio</option>
                            @foreach ($municipios as $municipio)
                                <option value="{{ $municipio->id }}">{{ $municipio->MunName }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
        
                    <div class="form-group mb-3">
                        <label for="puntoReferencia">Punto de referencia:</label>
                        <input type="text" class="form-control @error('puntoReferencia') is-invalid @enderror" id="puntoReferencia" placeholder="Ingresar punto de referencia" wire:model="punto_referencia">
                        @error('puntoReferencia') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
        
                    <div class="form-group mb-3">
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
        
                    <div class="d-grid gap-2">
                        <button type="button" wire:click="save()" class="btn btn-primary">Enviar solicitud</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="col">
        </div>
    </div>
</div>
