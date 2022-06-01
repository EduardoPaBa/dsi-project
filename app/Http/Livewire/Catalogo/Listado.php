<?php

namespace App\Http\Livewire\Catalogo;

use Livewire\Component;
use App\Models\Catalogo;
use Livewire\WithPagination;

class Listado extends Component
{
    //public $catalogos;
    public $search,
        $name, $selectedCatalogo, $editname, $deleteCatalodo_id;
        
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
    public function delete($value)
    {
        $this->deleteCatalodo_id = $value;
    }
    public function delete_now()
    {
        Catalogo::find($this->deleteCatalodo_id)->delete();
    }

    public function clear()
    {
        $this->name = '';
    }
        
}
