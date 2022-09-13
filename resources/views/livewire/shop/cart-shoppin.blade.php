<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>nombre</th>
                        <th>cantidad</th>
                        <th>precio</th>
                        <th>total</th>
                        <th>acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cart_items as $item)
                        <tr>
                            <td>{{$item->name}}</td>
                            <td>{{$item->quantity}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{\Cart::session(Auth::user()->id)->get($item->id)->getPriceSum()}}</td>
                            <td>
                                <button type="button" class="btn btn-danger">Eliminar</button>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <h2>Total: ${{\Cart::session(Auth::user()->id)->getTotal()}}</h2>
    </div>
</div>
