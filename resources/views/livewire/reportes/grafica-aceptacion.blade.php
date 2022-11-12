<div class="" style="float: center; margin: 5rem; ">
<div class="row">
        <div class="col">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        
                    </div>
                    <br>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                
                                <th scope="col">Nombre Producto</th>
                                <th scope="col">Promedio Rating </th>
                                
                                

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($calificaciones as  $rate)
                                <tr>
                                   
                                 
                                    <td class="border px-4 py-2">{{ $rate->nombreProd}}</td>
                                    <td class="border px-4 py-2">{{ $rate->cali}}</td>
                                    
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
    <br>
    <br>

</div>
