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

    <br>
    <br>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">
    {{-- The whole world belongs to you. --}}
    {{-- Hola --}}
    <div class="row">
        <div class="col">
        </div>
        <div class="col-11">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2">
                            <input type="text" class="form-control" placeholder="Search" wire:model="search">
                        </div>
                        <div class="col">

                            <button wire:click="crear()" type="button" class="btn btn-success"style="float: right;">Nuevo</button>

                        </div>
                    </div>
                    @if ($modal)
                                @include('livewire\producto.crear')
                            @endif
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">id</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripcion</th>
                                <th scope="col">Sub-Categoria</th>
                                <th scope="col">Talla</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Disponibilidad</th>
                                <th scope="col">Color</th>
                                <th scope="col">foto</th>
                                <th scope="col">Opciones</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($productos as $producto)
                                <tr>

                                    <td class="border px-4 py-2">{{ $producto->id}}</td>
                                    <td class="border px-4 py-2">{{ $producto->name}}</td>
                                    <td class="border px-4 py-2">{{ $producto->description}}</td>
                                    <td class="border px-4 py-2">{{ $producto->subcategorias->name}}</td>
                                    <td class="border px-4 py-2">{{ $producto->talla}}</td>
                                    <td class="border px-4 py-2">{{ $producto->precio}}</td>
                                    <td class="border px-4 py-2">{{ $producto->disponibilidad}}</td>
                                    <td class="border px-4 py-2">{{ $producto->color}}</td>
                                    <td class="border px-4 py-2">

                                        @foreach ($productoFoto as $item)
                                            @if ($item->producto_id == $producto->id)
                                                <img src="{{ asset( 'storage/'.$item->image ) }}" width="100" height="100"/> <br>
                                            @endif
                                        @endforeach


                                    </td>
                                    <td>
                                        <button wire:click="editar({{ $producto->id }})" type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#exampleModal">Editar</button>
                                        <button wire:click="borrar({{ $producto->id }})" type="button" class="btn btn-danger" data-toggle="modal"
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

