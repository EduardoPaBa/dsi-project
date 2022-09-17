<?php

namespace App\Http\Livewire\Producto;

use Livewire\Component;
use App\Models\Producto;
use App\Models\ProductoFoto;
use Illuminate\Support\Facades\Auth;

class ExpansionInfo extends Component

{
    public $name,$description,$subcategoria_id,$talla,$precio,$disponibilidad,$color,$image,$producto_id,$productoFoto,
    $producAnad,$producto;

    public $cart;
    protected $listeners = ['add_cart'];
    protected $rules = [
        'image' => 'required',
        'name' => 'required',
        'description' => 'required',
        'subcategoria_id' => 'required',
        'talla' => 'required',
        'precio' => 'required',
        'disponibilidad' => 'required',
        'color' => 'required',
        
    ];

    

    public function mount()
    {
        $this->productoFoto= ProductoFoto::all();
    }


    public function render()
    
    {
        $this->productos = Producto::all();
        return view('livewire.producto.expansion-info');
    }

    public function add_cart(Producto $producto)
    {
        $this->producAnad= $producto;
        //dd($this->producAnad);

        \Cart::session(Auth::user()->id)->add(array(
            
            'id' => $this->producAnad->id,
            'name' => $this->producAnad->name,
            'price' => $this->producAnad->precio,
            'quantity' => 1,

        ));

        $this->emit('message', 'se a agregado corectamente xd');
        $this->emitTo('catalogo.cart', 'add_cart');


    }
}
