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
                    <h4>Seleccione el rango de fechas a consultar los productos mas vendidos</h4>    
                    <div class="row">
                        <div class="col mb-2">
                            <label>Fecha de inicio:</label>
                            <br>
                            <input type="date" id="start" name="start" wire:click="limpiarPedido" wire:model="inicio"
                                min="2022-01-01">
                        </div>
                        <div class="col mb-2">
                            <label>Fecha de final:</label>
                            <br>
                            <input type="date" id="end" name="end" wire:click="limpiarPedido" wire:model="fin"
                                
                                min="2022-01-01">
                        </div>
                        <div class="col">
                            <button wire:click="ConsultaProdMasVendidos" type="button" class="btn btn-success"style="float: right;">Consultar productos mas vendidos</button>                            
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
                                <th scope="col">Fecha del pedido</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($pedidos != null)
                                @foreach ($pedidos as $pedido)
                                <tr>

                                    <td class="border px-4 py-2">{{ $pedido->name}}</td>
                                    <td class="border px-4 py-2">{{ $pedido->total}}</td>
                                    <td class="border px-4 py-2">{{ $pedido->precio}}</td>
                                    <td class="border px-4 py-2">{{ $pedido->description}}</td>
                                    <td class="border px-4 py-2">{{ $pedido->talla}}</td>
                                    <td class="border px-4 py-2">{{ $pedido->fecha}}</td>
                                    
                                </tr>
                                @endforeach 
                            @else
                                @error('inicio') <span class="mt-1 error">{{'Error'}}</span> @enderror
                                @error('fin') <span class="mt-1 error">{{'Error'}}</span> @enderror
                            @endif
                            
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
                icon: 'error',
                title: 'Error!',
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
