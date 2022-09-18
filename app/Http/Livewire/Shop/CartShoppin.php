<?php

namespace App\Http\Livewire\Shop;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Producto;

class CartShoppin extends Component
{
    public $cart_items, $productos;
    public function mount()
    {
        $this->productos=Producto::all();
    }
    public function render()
    {
        $this->cart_items= \Cart::session(Auth::user()->id)->getContent();
        return view('livewire.shop.cart-shoppin');
    }

   public function deleteItem($itemId)
   {
    //dd("Hola");
    \Cart::session(Auth::user()->id)->remove($itemId);
    $this->emit('message', 'se a agregado corectamente xd');
    $this->emitTo('catalogo.cart', 'add_cart');
   }
   public function updateQuantity($itemId, $quantity)
   {
    //dd("adios");
    //\Cart::session(Auth::user()->id)->getContent();
    \Cart::session(Auth::user()->id)->update($itemId, [
        'quantity' => array(
            'relative' =>false,
            'value'=>  $quantity
        ),
    ]);
    $this->emit('message', 'se a agregado corectamente xd');
    $this->emitTo('catalogo.cart', 'add_cart');
   }
   public function clearCart()
   {
    \Cart::session(Auth::user()->id)->clear();
    $this->emit('message', 'se a agregado corectamente xd');
    $this->emitTo('catalogo.cart', 'add_cart');
   }

}
