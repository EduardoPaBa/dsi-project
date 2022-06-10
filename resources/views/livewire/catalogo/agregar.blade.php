<div class="" style="float: center; margin: 1rem; ">
    <br><br>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    {{-- <h1>Hola dentro de la carpeta catalogo</h1> --}}


    <div class="row">
        <div class="col">

        </div>
        <div class="col-6">
            <div class="card">
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
                        <input type="text" class="form-control" id="" placeholder="Nombre Catálogo" wire:model="name">
                    </div>
                    <div>
                        <input type="file" wire:model="image" name="" id="">
                    </div>
                    <button type="button" wire:loading.attr="disabled" wire:target="save, image" class="mt-3 btn btn-outline-primary" wire:click="save()">Guardar</button>

                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>



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

</style>
