<?php

namespace App\Http\Livewire\Promociones;

use Livewire\Component;
use App\Models\Promocion;
use App\Models\Producto;
use App\Models\ProductoFoto;
use Illuminate\Support\Facades\Auth;

class PromocionesClientes extends Component
{
    public $descuento, $precio;
    public $productoFoto,$productosAll,$promocionesAll,$producAnad;

    public function render()
    {
        $this->productoFoto= ProductoFoto::all();
        $this->productos=Producto::all();
        $this->promociones=Promocion::all();
        return view('livewire.promociones.promociones-clientes');
    }

    public function add_cart(Producto $producto)
    {
        $this->producAnad= $producto;
        //dd($this->producAnad);

        \Cart::session(Auth::user()->id)->add(array(
            
            'id' => $this->producAnad->id,
            'name' => $this->producAnad->name,
            'price' => $this->producAnad->precio,
            'size' =>$this->producAnad->talla,
            'quantity' => 1,

        ));

        $this->emit('message', 'se a agregado corectamente xd');
        $this->emitTo('catalogo.cart', 'add_cart');


    }
}
