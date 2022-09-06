<div class="" style="float: center; margin: 1rem; ">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}

    <br><br>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <div class="row">
        <div class="col">
            
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <a href="{{ route('listEmplea') }}"> <button type="button" class="btn btn-outline-secondary"
                        style="float: right;">Volver</button> </a> <br>
                    <div class="form-group">
                        <label for="nombre">Nombre </label>
                        <input type="text" class="form-control" id="nombreEmpleado" placeholder="Nombre " wire:model="name" >
                        @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                       
                    </div>
                    <div class="form-group">
                        <label for="lastname">Apellido</label>
                        <input type="text" class="form-control" id="apellidoEmpleado" placeholder="Apellido" wire:model="lastname" >
                        @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                       
                    </div>

                    <div class="form-group">
                        <label for="nombresubcategoria">Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Email" wire:model="email" >
                        @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                       
                    </div>

                    <div class="form-group">
                        <label for="roles">Rol</label>
                        <br>
                        <select name="rol" id="categoria "wire:model="role_id">
                                <option value="">Rol del empleado</option>
                                @foreach ($roles as $role)
                                <option value="{{ $role->id }}">
                                    {{ $role->name }}

                                </option>
                                @endforeach
                               
                        </select>
                        <br>
                        @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="nombresubcategoria">Contraseña</label>
                        <input type="text" class="form-control" id="password" placeholder="Contraseña" wire:model="password" >
                        @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                       
                    </div>
                    <button type="button" class="btn btn-outline-primary" wire:click="save()">Guardar</button>

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


</div>
