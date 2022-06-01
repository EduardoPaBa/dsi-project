<?php

namespace App\Http\Livewire\Catalogo;

use Livewire\Component;
use App\Models\Catalogo;

class Agregar extends Component
{
    public $name, $valueidCata;
    

    public function mount()
    {
    }
    public function render()
    {
        return view('livewire.catalogo.agregar');
    }
    public function save()
    {
        $newValue = Catalogo::create([
            'name' => $this->name,
        ]);
        $newValue->save();
        $this->clear();
    }
    
    public function clear()
    {
        $this->name = '';
    }
}
