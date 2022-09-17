<?php

namespace App\Http\Livewire\Shop;


use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class CartShoppin extends Component
{
    public $cart_items;
    public function render()
    {
        $this->cart_items= \Cart::session(Auth::user()->id)->getContent();
        return view('livewire.shop.cart-shoppin');
    }

   public function deleteItem($itemId)
   {
    //dd("Hola");
    \Cart::session(Auth::user()->id)->remove($itemId);
   }
   public function updateQuantity($itemId, $quantity)
   {
    //dd("adios");
    //\Cart::session(Auth::user()->id)->getContent();
    \Cart::session(Auth::user()->id)->update($itemId, [
        'quantity' => $quantity,
    ]);
   }

}
