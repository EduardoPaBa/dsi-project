<div class="" style="float: center; margin: 5rem; ">
<div class="row">
        <div class="col">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">

                            <a href="{{ route('reporteAcep') }}"><button type="button" class="btn btn-success"style="float: right;">Regresar</button></a>
    
                        </div>
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
                            @foreach($productos as  $prod)
                                 @foreach($calificaciones as  $rate)
                                    <tr>
                                    
                                        @if($rate->producto_id == $prod->id)
                                            <td class="border px-4 py-2">{{ $prod->name}}</td>
                                      
                                            <td class="border px-4 py-2">{{($rate->rating)}}</td>
                                        @endif
                                    </tr>
                                @endforeach   
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
