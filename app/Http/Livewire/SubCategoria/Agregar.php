<?php

namespace App\Http\Livewire\Subcategoria;

use Livewire\Component;
use App\Models\SubCategoria;
use App\Models\Categoria;


class Agregar extends Component
{
    public $name, $valueidSubCate, $categorias;

     public function mount()
    {
    }
    public function render()
    {
        $this->categorias = Categoria::all();
        return view('livewire.subcategoria.agregar');
    }
    public function save()
    {
        $newValue = SubCategoria::create([
            'name' => $this->name,
            'categoria_id'=> $this->valueidSubCate,
        ]);
        $newValue->save();
        $this->clear();
    }
     public function clear()
    {
        $this->name = '';
        $this->valueidSubCate = '';
    }
    
}

