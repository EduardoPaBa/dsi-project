<?php

namespace App\Http\Livewire\Categoria;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Catalogo;
use App\Models\CatalogoCategoria;
use Illuminate\Http\Request;

class Agregar extends Component
{
    public $catalogos, $arrayCatalogoID, $name;
    protected $rules = [
        'name' => 'required',
        'arrayCatalogoID' => 'required',
    ];


    public function mount()
    {
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

    }

    public function save()
    {
        $this->validate();
        $newVal = Categoria::create([
            'name' => $this->name,
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
