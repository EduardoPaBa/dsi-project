{{-- 
    <div>
     Knowing others is intelligence; knowing yourself is true wisdom.
        <h1>hola mundo</h1>
    </div>
--}}
<div class="" style="float: center; margin: 5rem; ">
    {{-- The best athlete wants his opponent at his best. --}}
    {{-- <table>
        <thead>
        <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPCION</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }} </td>
                <td>{{ $producto->name }}</td>
                <td>{{ $producto->description }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    {{-- The whole world belongs to you. --}}
    {{-- Hola --}}
    <div class="row">
        <div class="col">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2">
                            <input type="text" class="form-control" placeholder="Search" wire:model="search">
                        </div>
                        <div class="col">

                            <button type="button" class="btn btn-success"style="float: right;" data-toggle="modal"
                            data-target="#crear">Nuevo</button>
                            
                            {{--
                            <a href="{{ route('addPromocion') }}">
                                <button type="button" class="btn btn-primary">Agregar promoción</button>
                            </a>
                            --}}

                        </div>
                    </div>

                    {{--
                    @if ($modal)
                        @include('livewire\producto.crear')
                    @endif
                    --}}

                    <table class="table table-hover">
                        <thead>
                            <tr>

                                <th scope="col">#</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Producto</th>
                                <th scope="col">Descuento</th>
                                <th scope="col">Duracion de Promoción</th>
                                <th scope="col">Opciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($promociones as $promocion)
                                <tr>

                                    <td class="border px-4 py-2">{{ $promocion->id}}</td>
                                    <td class="border px-4 py-2">{{ $promocion->name}}</td>
                                    <td class="border px-4 py-2">{{ $promocion->description}}</td>
                                    <td class="border px-4 py-2">{{ $promocion->producto->name}}</td>
                                    <td class="border px-4 py-2">{{ $promocion->descuento}}</td>
                                    <td class="border px-4 py-2">{{ $promocion->duracion_dias}}</td>
                                    {{--<td class="border px-4 py-2">

                                        @foreach ($productoFoto as $item)
                                            @if ($item->producto_id == $producto->id)
                                                <img src="{{ asset( 'storage/'.$item->image ) }}" width="100" height="100"/> <br>
                                            @endif
                                        @endforeach
                                    </td> --}}
                                    <td>
                                        <button wire:click="editar({{ $promocion->id }})" type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#crear">Editar</button>
                                        <button wire:click="borrar({{ $promocion->id }})" type="button" class="btn btn-danger" data-toggle="modal"
                                            data-target="#exampleModal2">Borrar</button>
                                    </td>
                                   {{-- <td>
                                        <button type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal" data-whatever="@mdo"
                                            wire:click="edit({{ $value->id }})">Editar</button>
                                        <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal2"
                                        wire:click="delete({{ $value->id  }})">Eliminar</button>
                                    </td>--}}
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
    @if(Session::has('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Great!',
                text: '{{ Session::get("success") }}'
            })
        </script>
    @endif

    {{-- Modal --}}
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
                                @error('descripcion') <span class="mt-1 error">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-group">
                            {{-- 
                            <div class="form-group mb-3">
                                <label for="producto" class="block text-gray-700 text-sm font-bold mb-2">Producto:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="producto" wire:model="producto_id">
                                @error('producto') <span class="mt-1 error">{{ $message }}</span> @enderror
                            </div>
                            --}}
                            <div class="form-group mb-3">
                                <label for="productos">Producto:</label>
                                <select name="productos" id="productos" wire:model="producto_id">
                                    <option value="" selected></option>
                                    @foreach ($productos as $producto)
                                        <option value="{{ $producto->id }}">{{ $producto->name }}</option>
                                    @endforeach
                                </select>
                                @error('subcategorias') <span class="text-danger"> {{ $message }} </span> @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="descuento" class="block text-gray-700 text-sm font-bold mb-2">Descuento:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="descuento" wire:model="descuento">
                                @error('descuento') <span class="mt-1 error">{{ $message }}</span> @enderror

                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group mb-3">
                                <label for="duraciondias" class="block text-gray-700 text-sm font-bold mb-2">Duracion Dias:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="duracion" wire:model="duracion_dias">
                                @error('duraciondias') <span class="mt-1 error">{{ $message }}</span> @enderror

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




