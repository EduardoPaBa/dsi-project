<?php

namespace App\Http\Livewire\Subcategoria;

use Livewire\Component;
use App\Models\SubCategoria;
use App\Models\Categoria;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;


class Agregar extends Component
{   use WithFileUploads;
    public $name, $categoria_id, $categorias,$image;
    protected $rules = [
        'name'=>'required',
        'categoria_id'=>'required',
        'image' => 'image',

    ];

     public function mount()
    {
        $this->idFile= rand();
    }

    public function render()
    {
        $this->categorias = Categoria::all();
        return view('livewire.subcategoria.agregar');
    }


    public function save()
    {   $this->validate();
        $image = $this->image->store('subcategoria', 'public');
        $newValue = SubCategoria::create([
            'name' => $this->name,
            'categoria_id'=> $this->categoria_id,
            'image'=> $image,
        ]);
        $newValue->save();
        $this->clear();
        return session()->flash("success", "Se guardo correctamente");
    }
     public function clear()
    {
        $this->name = '';
        $this->categoria_id = '';
        $this->image=null;
        $this->reset(['image',]);
        $this->idFile= rand();
    }

}

