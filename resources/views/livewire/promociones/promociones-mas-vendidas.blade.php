<div div class="" style="float: center; margin: 5rem; ">
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

                                <th scope="col">Nombre del producto</th>
                                <th scope="col">Nombre de promoción</th>
                                <th scope="col">Cantidad</th>
                                <th scope="col">Precio</th>
                                <th scope="col">Descuento</th>
                                <th scope="col">Precio con descuento</th>
                                <th scope="col">Ingreso Aprox</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($promMasVen as $promo)
                                <tr>

                                    <td class="border px-4 py-2">{{ $promo->nombreProducto}}</td>
                                    <td class="border px-4 py-2">{{ $promo->nombrePromo}}</td>
                                    <td class="border px-4 py-2">{{ $promo->total}}</td>
                                    <td class="border px-4 py-2">{{ $promo->precio}}$</td>
                                    <td class="border px-4 py-2">{{ $promo->descuento}}%</td>
                                    <td class="border px-4 py-2">{{ $promo->precio - $promo->precio*($promo->descuento)/100}}$</td>
                                    <td class="border px-4 py-2">{{ ($promo->precio - $promo->precio*($promo->descuento)/100)*$promo->total}}$</td>
                                    {{-- <tdclass="borderpx-4py-2">$promo->promo->name</td>
                                    <td class="border px-4 py-2">{{ $promo->descuento}}</td>
                                    <td class="border px-4 py-2">{{ $promo->duracion_dias}}</td> --}}
                                    
                                    {{--<td>
                                        <button wire:click="editar({{ $promo->id }})" type="button" class="btn btn-primary" data-toggle="modal"
                                            data-target="#crear">Editar</button>
                                        <button type="button" class="btn btn-danger" 
                                            data-toggle="modal"     
                                            data-target="#eliminarPromo"    
                                            wire:click="borrar({{ $promo->id }})" >Borrar</button>
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
