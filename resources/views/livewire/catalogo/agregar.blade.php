<div class="" style="float: center; margin: 1rem; ">
    <br><br>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    {{-- <h1>Hola dentro de la carpeta catalogo</h1> --}}

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">



    <div class="row">
        <div class="col">

        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    GESTIONAR CATÁLOGO
                </div>
                <div class="card-body">
                    <a href="{{ route('listCatalog') }}"> <button type="button" class="btn btn-outline-secondary"
                        style="float: right;">Volver</button> </a> <br>
                        <div wire:loading wire:target="image" class="mt-4 mb-3 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
                            <strong class="font-bold">Imagen cargando!</strong>
                            <span class="block sm:inline">Por favor espere  .</span>
                          </div>
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" alt="">
                        @endif

                        <div class="form-group">
                        <label for="">Nombre del Catálogo</label>
                        <input type="text" class="form-control" id="" placeholder="Nombre Catálogo"
                        wire:model="name">
                        @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Seleccione una foto</label>
                        <input type="file" wire:model="image" class="form-control-file" id="{{$idFile}}">
                        @error('image') <span class="mt-1 error">{{ $message }}</span> @enderror
                    </div>
                    <button type="button" wire:loading.attr="disabled" wire:target="save, image" class="mt-3 btn btn-outline-primary" wire:click="save()">Guardar</button>

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
                title: 'Great!',
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
