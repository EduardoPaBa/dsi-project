<?php

namespace App\Http\Livewire\Catalogo;

use Livewire\Component;

class Cart extends Component
{
    public $cart;
    protected $listeners = ['add_cart'];
    public function add_cart()
    {

    }
    public function render()
    {
        return view('livewire.catalogo.cart');
    }
}
