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
}
