<?php

namespace App\Http\Livewire\Categoria;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Catalogo;
use App\Models\CatalogoCategoria;
use Illuminate\Http\Request;
use Livewire\WithFileUploads;

class Agregar extends Component
{    use WithFileUploads;
    public $catalogos, $arrayCatalogoID, $name,$image,$idFile;
    protected $rules = [
        'name' => 'required',
        'arrayCatalogoID' => 'required',
        'image' => 'image',
    ];


    public function mount()
    {   $this->idFile= rand();
        $this->catalogos=Catalogo::all();
    }
    public function render()
    {
        return view('livewire.categoria.agregar');
    }

    public function clear()
    {
        $this->name = '';
        $this->arrayCatalogoID=null;
        $this->image=null;
        $this->reset(['image',]);
        $this->idFile= rand();

    }

    public function save()
    {
        $this->validate();
        $image = $this->image->store('categoria', 'public');
        $newVal = Categoria::create([
            'name' => $this->name,
            'image'=> $image,
        ]);
        $newVal->save();

        foreach ($this->arrayCatalogoID as $keyy => $valuex) {
            $newValue = CatalogoCategoria::create([
                'catalogo_id' => $valuex,
                'categoria_id' => $newVal->id,
            ]);
            $newValue->save();
        }
        $this->clear();
        return session()->flash("success", "This is success message");

    }
}
