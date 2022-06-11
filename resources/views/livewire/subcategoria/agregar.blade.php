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
                <div class="card-body">
                    <a href="{{ route('listSubCate') }}"> <button type="button" class="btn btn-outline-secondary"
                        style="float: right;">Volver</button> </a> <br>
                    <div class="form-group">
                        <label for="nombresubcategoria">Nombre de la SubCategoria</label>
                        <input type="text" class="form-control" id="nombresub" placeholder="Nombre SubCategoria" wire:model="name" >
                        @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                       
                    </div>
                    <div class="form-group">
                        <label for="categoria">Categoria a la que pertenece</label>
                        <br>
                        <select name="categoria" id="categoria "wire:model="categoria_id">
                                <option value="">Escoja la categoria</option>
                                @foreach ($categorias as $categoria)
                                <option value="{{ $categoria->id }}">
                                    {{ $categoria->name }}

                                </option>
                                @endforeach
                               
                        </select>
                        <br>
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

