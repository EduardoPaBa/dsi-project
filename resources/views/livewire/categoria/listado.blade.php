<div class="" style="float: center; margin: 1rem; ">
    {{-- Do your work, then step back. --}}
    <br><br>
    {{-- <h1>hellou</h1> --}}
    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    GESTIONAR CATEGORÍA
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2">
                            <input type="text" class="form-control" placeholder="Search" wire:model="search">
                        </div>
                        <div class="col">

                            <a href=""><button type="button" class="btn btn-success"
                                    style="float: right;">Nuevo</button></a>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Catálogos</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categorias as $key => $value)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $value->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-info" data-toggle="modal"
                                        data-target="#exampleModal"
                                        wire:click="catalogos_Perte({{ $value->id }})">Ver</button>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#exampleModal2" wire:click="catalogos_gestionar({{ $value->id }})">
                                        Editar</button>

                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal3"
                                        wire:click="delete({{ $value->id }})">Eliminar</button>
                                </td>

                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                    {{ $categorias->links() }}

                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>


    {{-- MODAL VER CATALOGOS --}}
    <div class="modal fade" id="exampleModal" wire:ignore.self tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Listado de catálogos al que pertenece</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            {{-- <label for="recipient-name" class="col-form-label">Nombre:</label> --}}
                            @if ($viendoCatalo)
                            <div>
                                @foreach ($catalogosCategorias as $key => $value)
                                <h5>{{ $value->catalogo->name }}</h5>
                                @endforeach
                            </div>
                            @endif
                        </div>
                        {{-- <div class="form-group">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div> --}}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>
    {{-- MODAL EDIT CATALOGOS --}}
    <div class="modal fade" id="exampleModal2" wire:ignore.self tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editando Categorias</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="recipient-name" class="col-form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="recipient-name"
                                    wire:model="editname">
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    @if ($viendoCatalos)
                                    @foreach ($catalogos as $key => $value)
                                    {{-- <h5>{{ $value->catalogo->name }}</h5> --}}
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="" value="{{ $value->id }}"
                                            wire:model="arrrayCategoiasID.{{ $value->id }}">
                                        <label class="form-check-label" for="exampleCheck1">{{ $value->name }}</label>
                                    </div>

                                    @endforeach
                                    @endif

                                </div>
                            </div>
                        </div>


                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" {{-- data-dismiss="modal" --}}
                        wire:click="$emit('postAdded')">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal DELETE CATEGORIA -->
    <div wire:ignore.self class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="delete_now()" class="btn btn-danger close-modal"
                        data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
        </div>
    </div>

</div>
<style>
    .form-control {
        color: black;
    }

</style>
