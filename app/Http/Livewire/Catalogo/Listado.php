<?php

namespace App\Http\Livewire\Catalogo;

use Livewire\Component;
use App\Models\Catalogo;
use Livewire\WithPagination;

class Listado extends Component
{
    //public $catalogos;
    public $search,
        $name, $selectedCatalogo, $editname;
        
    use WithPagination;
    public function mount()
    {
        //$this->catalogos=Catalogo::all();
    }
    public function render()
    {
        return view('livewire.catalogo.listado', [
            'catalogos' => Catalogo::where('name', 'like', '%' . $this->search . '%')->paginate(5),
        ]);
    }
    public function edit($value)
    {
        //dd($value);
        $this->clear();
        $this->selectedCatalogo=Catalogo::find($value);
        $this->editname = Catalogo::find($value)->name;
        //dd($this->editname);
        
    }
    public function save_edit()
    {
        $this->selectedCatalogo->update([
            'name' => $this->editname,
        ]);
    }

    public function clear()
    {
        $this->name = '';
    }
    public function toEdit($valueidCata)
    {
        //dd($valueidCata);
        //return redirect()->route('addCatalog', ['valueidCata' => $valueidCata]);
        return redirect()->route('addCatalog', ['valueidCata' => $valueidCata]);
    }
}
