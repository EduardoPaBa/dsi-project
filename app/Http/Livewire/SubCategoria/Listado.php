<?php

namespace App\Http\Livewire\Subcategoria;

use Livewire\Component;
use App\Models\SubCategoria;
use App\Models\Categoria;
use Livewire\WithPagination;

class Listado extends Component
{
    public $search,$name,$cateid, $selectedSubCategoria, $editname,$editcateid,$deleteSubCate_id;

    use WithPagination;
    public function mount()
    {
        //$this->catalogos=Catalogo::all();
    }
    public function render()
    {
        $this->categorias = Categoria::all();
        return view('livewire.subcategoria.listado', [
            'subcategorias' => SubCategoria::where('name', 'like', '%' . $this->search . '%')->paginate(5),
        ]);
    }
    public function edit($value)
    {
        //dd($value);
        $this->clear();
        $this->selectedSubCategoria=SubCategoria::find($value);
        $this->editname = SubCategoria::find($value)->name;
        $this->editcateid = SubCategoria::find($value)->cateid;
        //dd($this->editname);
        
    }
    public function save_edit()
    {
        $this->selectedSubCategoria->update([
            'name' => $this->editname,
            'categoria_id'=> $this->editcateid,
        ]);
    }
    public function delete($value)
    {
        $this->deleteSubCate_id = $value;
    }
    public function delete_now()
    {
        SubCategoria::find($this->deleteSubCate_id)->delete();
    }

    public function clear()
    {
        $this->name = '';
        $this->cateid = '';
    }
}
