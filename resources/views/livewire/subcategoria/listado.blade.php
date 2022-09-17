<div class="" style="float: center; margin: 1rem; ">
    <br>
    <br>
    {{-- The whole world belongs to you. --}}
    {{-- Hola --}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

    <div class="row">
        <div class="col">
        </div>
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2">
                            <input type="text" class="form-control" placeholder="Search" wire:model="search">
                        </div>
                        <div class="col">

                            <a href="{{ route('addSubCate') }}"><button type="button" class="btn btn-success"
                                    style="float: right;">Nuevo</button></a>
                        </div>
                    </div>
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nombre SubCategoria</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">#Categoria</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Acciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($subcategorias as $key => $value)
                                <tr>
                                    <th scope="row">{{ $key + 1 }}</th>
                                    <td>{{ $value->name }}</td>
                                    <td>
                                         <img src="{{ asset( 'storage/'.$value->image ) }}" width="100" height="100"/>
                                    </td>
                                    <td>{{ $value->categoria_id }}</td>
                                  
                                    <td>{{ $value->categoria->name }}</td>
                                    
                                    <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal" data-whatever="@mdo"
                                            wire:click="edit({{ $value->id }})">Editar</button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal2"
                                        wire:click="delete({{ $value->id  }})">Eliminar</button>
                                    </td>

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                    {{ $subcategorias->links() }}

                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
    <br>

    {{-- MODAL --}}
    <div class="modal fade" id="exampleModal" wire:ignore.self tabindex="-1" role="dialog"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Editando</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre de la SubCategoria:</label>
                            <input type="text" class="form-control" id="nombresub" placeholder="Nombre SubCategoria" wire:model="name" >
                             @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                        </div>
                        <div class="form-group">
                            <label for="categoria">Categoria a la que pertenece</label>
                            <br>
                            <select name="categoria" id="categoria" wire:model="categoria_id">
                                
                                 @foreach ($categorias as $categoria)
                                 <option value="{{$categoria->id}}" 
                                    @foreach ($subcategoriass as $subcategoria)
                                        @if ($subcategoria->categoria_id == $categoria->id)
                                        {{'selected="selected"'}}
                                        @endif 
                                    @endforeach >
                                    {{ $categoria->name }} 
                                </option>               
                                 @endforeach
                            </select>
                            <br>
                             
                        </div>
                        {{-- <div class="form-group">
                  <label for="message-text" class="col-form-label">Message:</label>
                  <textarea class="form-control" id="message-text"></textarea>
                </div> --}}
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary" wire:click="save_edit()">Guardar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
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

