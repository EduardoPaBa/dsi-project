
<div class="" style="float: center; margin: 5rem; ">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    
    <div class="row">
        <div class="col">
        </div>
        <div class="col-16">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2">
                            <input type="text" class="form-control" placeholder="Search" wire:model="search">
                        </div>
                        <div class="col">

                            <button wire:click="crear()" type="button" class="btn btn-success"style="float: right;" data-toggle="modal"
                            data-target="#crear">Nuevo</button>
                            <a href="{{ route('PromocionMasVendida') }}">
                                <button type="button" class="btn btn-primary">Promocion mas vendida</button>
                            </a>

                        </div>
                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr>

                                
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Descuento</th>
                                <th scope="col">Duracion de Promoción</th>
                                <th scope="col">Imagen promocion</th>
                                <th scope="col">Opciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($promociones as $promocion)
                                <tr>

                                   
                                    <td class="border px-4 py-2">{{ $promocion->name}}</td>
                                    <td class="border px-4 py-2">{{ $promocion->description}}</td>
                                    <td class="border px-4 py-2">{{ $promocion->producto->name}}</td>
                                    <td class="border px-4 py-2">{{ $promocion->descuento}}%</td>
                                    <td class="border px-4 py-2">{{ $promocion->duracion_dias}}</td>
                                    <td>
                                        <img src="{{ asset( 'storage/'.$promocion->image ) }}" width="100" height="100"/>
                                    </td>
                                    <td>
                                        <button wire:click="editar({{ $promocion->id }})" type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#crear">Editar</button>
                                        <br>
                                        <br>    
                                        <button type="button" class="btn btn-danger" 
                                            data-toggle="modal"     
                                            data-target="#eliminarPromo"    
                                            wire:click="borrar({{ $promocion->id }})" >Borrar</button>
                                    </td>
                                   
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col">
        </div>
    </div>
    

    {{-- modal editar crear --}}
    <div class="modal fade" id="crear" wire:ignore.self tabindex="-1" role="dialog"
    aria-labelledby="solicitudModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalles de promoción:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="Nombre" class="block text-gray-700 text-sm font-bold mb-2">Nombre de promoción:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" wire:model="name">
                                @error('name') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="descripcion" class="block text-gray-700 text-sm font-bold mb-2">Descripción:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="description" wire:model="description">
                                @error('description') <span class="mt-1 error">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-group">
                            
                            <div class="form-group mb-3">
                                <label for="productos">Producto:</label>
                                <select name="productos" id="productos" wire:model="producto_id">
                                    <option value="" selected></option>
                                    @foreach ($productos as $producto)
                                        <option value="{{ $producto->id }}">{{ $producto->name }}</option>
                                    @endforeach
                                </select>
                                @error('producto_id') <span class="text-danger"> {{ $message }} </span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="descuento" class="block text-gray-700 text-sm font-bold mb-2">Descuento:</label>
                                <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descuento" wire:model="descuento">
                                @error('descuento') <span class="mt-1 error">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="duraciondias" class="block text-gray-700 text-sm font-bold mb-2">Duracion Dias:</label>
                                <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="duracion" wire:model="duracion_dias">
                                @error('duracion_dias') <span class="mt-1 error">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="image" class="block text-gray-700 text-sm font-bold mb-2">Imagen Promociòn:</label>
                                <input type="file" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="image" wire:model="image">
                                @error('image') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                        </div>
                    </form>

                </div>
                <div class="modal-footer">
                    <span>
                        <button wire:click.prevent="guardar()" type="button" class="btn btn-primary" data-dismiss="modal">Guardar</button>
                    </span>

                    <span>
                        <button wire:click="cerrarModal()" type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    </span>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Delete-->
    <div wire:ignore.self class="modal fade" id="eliminarPromo" tabindex="-1" role="dialog"
    aria-labelledby="eliminarPromoLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="eliminarPromoLabel">Delete Confirm</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true close-btn">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure want to delete?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="borrar_now()" 
                    class="btn btn-danger close-modal"
                    data-dismiss="modal">Yes, Delete</button>
                </div>
            </div>
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




