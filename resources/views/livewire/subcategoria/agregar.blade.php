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
                    <a href="{{ route('listSubCate') }}"> <button type="button" class="btn btn-outline-secondary"
                        style="float: right;">Volver</button> </a> <br>
                    <div class="form-group">
                        <label for="nombresubcategoria">Nombre de la SubCategoria</label>
                        <input type="text" class="form-control" id="nombresub" placeholder="Nombre SubCategoria" wire:model="name" >
                       
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
                    </div>
                    <button type="button" class="btn btn-outline-primary" wire:click="save()">Guardar</button>

                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
</div>
