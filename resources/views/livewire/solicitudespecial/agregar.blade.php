<div class="" style="float: center; margin: 1rem">
    
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
                    <a href="{{ route('listSolicitudEspecial') }}"> <button type="button" class="btn btn-outline-secondary"
                        style="float: right;">Volver</button> </a> <br>
                    <div class="form-group mb-3">
                        <label for="link">Link de Shein:</label>
                        <input type="url" name="url" class="form-control" id="link" placeholder="https://www.shein.com/" pattern="https:\/\/[a-zA-Z\.\/-]+" size="255" minlength="10" maxlength="255" wire:model="link"  title="Include http://shein">
 
                         @error('link') <span class="mt-1 error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="description">Descripción (Talla, Color):</label>
                        <input type="text" class="form-control" id="description" placeholder="Ingresar descripcion" wire:model="description" >
                         @error('description') <span class="mt-1 error">{{ $message }}</span> @enderror
                    </div>          
                    <div class="form-group mb-3">
                        <label for="direccion">Dirección:</label>
                        <input type="text" class="form-control" id="direccion" placeholder="Ingresar dirección" wire:model="direccion" >
                         @error('direccion') <span class="mt-1 error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="departamento">Departamento:</label>
                        <select name="departamento" id="departamento" wire:model="departamento">
                            <option value="" selected>Seleccione el departamento</option>
                            @foreach ($departamentos as $departamento)
                                <option value="{{ $departamento->id }}">{{ $departamento->DepName }}</option>
                            @endforeach
                        </select>
                        <br>
                        @error('departamento') <span class="mt-1 error">{{ $message }}</span> @enderror
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
                        <br>
                        @error('municipio') <span class="mt-1 error">{{ $message }}</span> @enderror
                    </div>
                    @endif
        
                    <div class="form-group mb-3">
                        <label for="puntoReferencia">Punto de referencia:</label>
                        <input type="text" class="form-control" id="puntoReferencia" placeholder="Ingresar punto de referencia" wire:model="punto_referencia" >
                         @error('punto_referencia') <span class="mt-1 error">{{ $message }}</span> @enderror
                    </div>
        
                    <div class="form-group mb-3">
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
                        <input type="text" class="form-control" id="telefono" placeholder="Ingresar teléfono" wire:model="telefono" >
                         @error('telefono') <span class="mt-1 error">{{ $message }}</span> @enderror
                    </div>
        
                    <div class="d-grid gap-2">
                        <button type="button" wire:click="save()" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
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