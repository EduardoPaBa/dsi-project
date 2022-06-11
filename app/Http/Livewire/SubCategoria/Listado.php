<?php

namespace App\Http\Livewire\Subcategoria;

use Livewire\Component;
use App\Models\SubCategoria;
use App\Models\Categoria;
use Livewire\WithPagination;
use Illuminate\Http\Request;

class Listado extends Component
{
    public $search, $selectedSubCategoria, $name,$categoria_id,$deleteSubCate_id;


     protected $rules = [
        'name'=>'required',
        'categoria_id'=>'required'
        
    ];
    use WithPagination;
    public function mount()
    {
        //$this->catalogos=Catalogo::all();
    }
    public function render()
    {
        $this->categorias = Categoria::all();
        $this->subcategoriass= SubCategoria::all();
        return view('livewire.subcategoria.listado', [
            'subcategorias' => SubCategoria::where('name', 'like', '%' . $this->search . '%')->paginate(5),
        ]);
    }
    public function edit($value)
    {
        //dd($value);
        $this->clear();
        $this->selectedSubCategoria=SubCategoria::find($value);
        $this->name = SubCategoria::find($value)->name;
        $this->categoria_id = SubCategoria::find($value)->categoria_id;
        //dd($this->editname);
        
    }
    public function save_edit()
    {   $this->validate();
        $this->selectedSubCategoria->update([
            'name' => $this->name,
            'categoria_id'=> $this->categoria_id,
        ]);
        return session()->flash("success", "Se actualizo correctamente");
    }
    public function delete($value)
    {
        $this->deleteSubCate_id = $value;
    }
    public function delete_now()
    {
        SubCategoria::find($this->deleteSubCate_id)->delete();
        return session()->flash("success", "Se elimino correctamente");
    }

    public function clear()
    {
        $this->name = '';
        $this->categoria_id = '';
    }
}
