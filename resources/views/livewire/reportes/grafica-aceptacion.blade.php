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
                                @for ($i = 0; $i < count($notas); $i++)
                                    <tr>
                                        <td class="border px-4 py-2">{{$notas[$i]->name}}</td>
                                      
                                         <td class="border px-4 py-2">{{$notas[$i]->rating}}</td>   
                                    </tr>
                                @endfor
                               
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
