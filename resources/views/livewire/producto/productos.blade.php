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
    {{-- The whole world belongs to you. --}}
    {{-- Hola --}}
    <div class="row">
        <div class="col">
        </div>
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-2">
                            <input type="text" class="form-control" placeholder="Search" wire:model="search">
                        </div>
                        <div class="col">

                            <button wire:click="crear()" type="button" class="btn btn-success"style="float: right;">Nuevo</button>
                            @if ($modal)
                                @include('livewire\producto.crear')
                            @endif
                        </div>
                    </div>
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

</div>
<style>
    .form-control {
        color: black;
    }

</style>

