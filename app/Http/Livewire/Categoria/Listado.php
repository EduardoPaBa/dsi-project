<?php

namespace App\Http\Livewire\Categoria;

use Livewire\Component;
use App\Models\Categoria;
use App\Models\Catalogo;
use App\Models\CatalogoCategoria;
use Livewire\WithPagination;
class Listado extends Component
{
    /* $categorias,  */
    public $cataCatego, $search, $catalogosCategorias, $viendoCatalo;
    use WithPagination;
    public function mount()
    {
        $this->viendoCatalo=false;
    }
    public function render()
    {
        return view('livewire.categoria.listado', [
            'categorias' => Categoria::where('name', 'like', '%' . $this->search . '%')->paginate(5),
        ]);
    }
    public function catalogos_Perte($value)
    {
        $this->viendoCatalo=true;
        //dd($value);
        $this->catalogosCategorias=CatalogoCategoria::where('categoria_id', $value)->get();
        $this->viendoCatalo=true;
        //dd($this->catalogosCategorias);
    }
    public function edit($value)
    {

    }
    public function delete($value)
    {

    }
}
