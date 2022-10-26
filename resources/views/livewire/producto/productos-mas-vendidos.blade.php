<div class="" style="float: center; margin: 5rem; ">
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css">

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

                            <button type="button" class="btn btn-success"style="float: right;">Generar PDF</button>
                            
                        </div>
                    </div>

                    <table class="table table-hover">
                        <thead>
                            <tr>

                                <th scope="col">Nombre</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Talla</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pedidos as $pedido)
                                <tr>

                                    <td class="border px-4 py-2">{{ $pedido->name}}</td>
                                    <td class="border px-4 py-2">{{ $pedido->total}}</td>
                                    <td class="border px-4 py-2">{{ $pedido->precio}}</td>
                                    <td class="border px-4 py-2">{{ $pedido->description}}</td>
                                    <td class="border px-4 py-2">{{ $pedido->talla}}</td>
                                    {{-- <tdclass="borderpx-4py-2">$pedido->pedido->name</td>
                                    <td class="border px-4 py-2">{{ $pedido->descuento}}</td>
                                    <td class="border px-4 py-2">{{ $pedido->duracion_dias}}</td> --}}
                                    
                                    {{--<td>
                                        <button wire:click="editar({{ $pedido->id }})" type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#crear">Editar</button>
                                        <button type="button" class="btn btn-danger" 
                                            data-toggle="modal"     
                                            data-target="#eliminarPromo"    
                                            wire:click="borrar({{ $pedido->id }})" >Borrar</button>
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
