<?php

namespace App\Http\Livewire\Subcategoria;

use Livewire\Component;
use App\Models\SubCategoria;
use App\Models\Categoria;
use Illuminate\Http\Request;


class Agregar extends Component
{
    public $name, $categoria_id, $categorias;
    protected $rules = [
        'name'=>'required',
        'categoria_id'=>'required'

    ];

     public function mount()
    {
    }
    public function render()
    {
        $this->categorias = Categoria::all();
        return view('livewire.subcategoria.agregar');
    }


    public function save()
    {   $this->validate();
        $newValue = SubCategoria::create([
            'name' => $this->name,
            'categoria_id'=> $this->categoria_id,
        ]);
        $newValue->save();
        $this->clear();
        return session()->flash("success", "Se guardo correctamente");
    }
     public function clear()
    {
        $this->name = '';
        $this->categoria_id = '';
    }

}

