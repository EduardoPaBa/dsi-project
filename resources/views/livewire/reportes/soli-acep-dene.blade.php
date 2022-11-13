
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="" style="float: center; margin: 5rem; ">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <div class="row">
                <div class="col">
                </div>
                <div class="col-12">
                    <div class="card">

                        <div class="card-body">
                            {{-- <h5 class="card-title">Aprobadas y denegas</h5> --}}

                            <div class="card">
                                <h5 class="card-title">Solicitudes</h5>
                                <div class="row">

                                    <div class="col"><h5>Aprobadas</h5>
                                        <p>Cantidad de Solicitudes aprobadas: {{$CsolicitudesAp}}</p>
                                    </div>
                                    <div class="col"><h5>Denegadas</h5>
                                        <p>Cantidad de Solicitudes denegadas: {{$CsolicitudesDn}} </p>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                            <div class="card">
                                <h5 class="card-title">Solicitudes Especialess</h5>
                                <div class="row">

                                    <div class="col"><h5>Aprobadas</h5>
                                        <p>Cantidad de Solicitudes aprobadas: {{$CsolicitudesEspeciaAp}} </p>
                                    </div>
                                    <div class="col"><h5>Denegadas</h5>
                                        <p>Cantidad de Solicitudes denegadas: {{$CsolicitudesEspeciaDn}} </p>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h2>Lista de productos denegados</h2>
                            <div class="row">

                                <div class="col-4">

                                </div>
                                <div class="col-4">
                                    <table class="table table-dark">
                                        <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nombre Producto</th>
                                            <th scope="col">Numero de veces denegado</th>

                                        </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($productos as $key => $value)
                                                <tr>
                                                    <th scope="row">{{$key+1}}</th>
                                                    <td>{{$value->name}}</td>
                                                    <td>{{$value->total}}</td>
                                                </tr>

                                            @endforeach


                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-4">

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                </div>

            </div>
            <br>
            <br>
        </div>

