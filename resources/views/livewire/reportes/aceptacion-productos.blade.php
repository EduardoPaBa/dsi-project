<div class="" style="float: center; margin: 5rem; ">

    <div class="row">
        <div class="col">
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        
                        <div class="col">

                        <a href="{{ route('graficaAcep') }}"><button type="button" class="btn btn-success"style="float: right;">Ver Promedio de calificaciones</button></a>
                            
                        </div>
                    </div>
                    <br>

                    <table class="table table-hover">
                        <thead>
                            <tr>
                                
                                <th scope="col">Nombre Usuario</th>
                                <th scope="col">Correo</th>
                                <th scope="col">ID Producto</th>
                                <th scope="col">Nombre Producto</th>
                                <th scope="col">Calificación (5/5)</th>
                                <th scope="col">Comentario</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuarios as $user)
                                @foreach ($calificaciones as  $rate)
                                    <tr>
                                        @if($user->id == $rate->usuario_id)
                                           
                                            <td class="border px-4 py-2">{{ $rate->usuario->name}}</td>
                                            <td class="border px-4 py-2">{{ $rate->usuario->email}}</td>
                                            <td class="border px-4 py-2">{{ $rate->producto_id}}</td>
                                            <td class="border px-4 py-2">{{ $rate->producto->name}}</td>
                                            <td class="border px-4 py-2">{{ $rate->rating}}</td>
                                            <td class="border px-4 py-2">{{ $rate->comment}}</td>
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
    
</div>
