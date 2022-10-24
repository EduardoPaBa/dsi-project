<div>
    <div class="fluid-container mt-3">
        <div class="row">
            <div class="col"></div>

            <div class="col-8">
                <div class="card mb-4 shadow border-secondary">
                    <div class="card-header">
                        <p class="h4 text-center">Solicitudes de pedidos normales</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users_solicitud as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->cantidad }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-4 shadow border-secondary">
                    <div class="card-header">
                        <p class="h4 text-center">Solicitudes de pedidos especiales</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users_especial as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->lastname }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->cantidad }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mb-4 shadow border-secondary">
                    <div class="card-header">
                        <p class="h4 text-center">Resumen</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Email</th>
                                    <th>Cantidad</th>
                                </tr>
                            </thead>
                            <tbody>
                                @for($i = 0; $i < count($users_solicitud); $i++)
                                <tr>
                                    <td>{{ $users_solicitud[$i]->name }}</td>
                                    <td>{{ $users_solicitud[$i]->lastname }}</td>
                                    <td>{{ $users_solicitud[$i]->email }}</td>
                                    <td>{{ $users_solicitud[$i]->cantidad + $users_especial[$i]->cantidad }}</td>
                                </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col"></div>
        </div>
    </div>
</div>
