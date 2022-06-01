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
    public $cataCatego, $search, $catalogos, $catalogosCategorias, $viendoCatalo, $viendoCatalos, $arrrayCategoiasID,
    $categoriaSelectec;
    use WithPagination;
    public function mount()
    {
        $this->viendoCatalo=false;
        $this->viendoCatalos=false;
        $this->arrrayCategoiasID=[];
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
    public function catalogos_gestionar($value)
    {
        $this->arrrayCategoiasID=[];
        $this->categoriaSelectec=$value;
        $this->catalogos= Catalogo::all();
        $this->catalogosCategorias=CatalogoCategoria::where('categoria_id', $value)->get();
        foreach ($this->catalogosCategorias as $key => $value) {
            //array_push($this->arrrayCategoiasID, $value->id);
            $this->arrrayCategoiasID[$value->catalogo_id]= $value->catalogo_id;
        }
        $this->viendoCatalos=true;
    }
    public function save_catalogos()
    {
        //dd($this->arrrayCategoiasID,$this->categoriaSelectec );
        $this->catalogos= Catalogo::all();
        $eliminar=true;
        $this->catalogosCategorias=CatalogoCategoria::where('categoria_id', $this->categoriaSelectec)->get();
        foreach ($this->catalogosCategorias as $key => $value) {
            foreach ($this->arrrayCategoiasID as $keyy => $valuex) {
                //dump($value->catalogo_id , "El bueno ". $valuex);
                if ($value->catalogo_id == $valuex) {
                    $eliminar=false;
                    //break;
                }
                if ($value->catalogo_id !== $valuex && $valuex !==null)  {
                    $newValue = CatalogoCategoria::create([
                        'catalogo_id' => $valuex,
                        'categoria_id' => $value->categoria_id,
                    ]);
                    $newValue->save();
                }
            }    
            if ($eliminar==true) {
                $value->delete();
            }
            //dump($eliminar);
        }
        
        
    }
    public function edit($value)
    {

    }
    public function delete($value)
    {

    }
}
