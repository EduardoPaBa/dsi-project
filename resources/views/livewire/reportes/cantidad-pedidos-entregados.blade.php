<div>
    <div class="fluid-container mt-3">
        <div class="row">
            <div class="col"></div>

            <div class="col-8">
                <div class="card mb-4 shadow border-secondary">
                    <div class="card-header">
                        <p class="h4 text-center">Pedidos entregados</p>
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                                <th>Cliente</th>
                                <th>Email</th>
                                <th>Departamento</th>
                                <th>Municipio</th>
                            </thead>
                            <tbody>
                                @foreach($pedidos as $pedido)
                                <tr>
                                    <td>{{ $pedido->name }}</td>
                                    <td>{{ $pedido->email }}</td>
                                    <td>{{ $pedido->DepName }}</td>
                                    <td>{{ $pedido->MunName }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col"></div>
        </div>
    </div>
</div>
