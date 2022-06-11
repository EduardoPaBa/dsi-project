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
    public $cataCatego, $search, $catalogos, $catalogosCategorias, $viendoCatalo, $viendoCatalos, $arrrayCategoiasID, $categoriaSelectec,
    $deleteCategoria_id;
    use WithPagination;
    public function mount()
    {
        $this->viendoCatalo = false;
        $this->viendoCatalos = false;
        $this->arrrayCategoiasID = [];
    }
    public function render()
    {
        return view('livewire.categoria.listado', [
            'categorias' => Categoria::where('name', 'like', '%' . $this->search . '%')->paginate(5),
        ]);
    }
    public function catalogos_Perte($value)
    {
        $this->catalogosCategorias="";
        $this->viendoCatalo = true;
        //dd($value);
        $this->catalogosCategorias = CatalogoCategoria::where('categoria_id', $value)->get();
        $this->viendoCatalo = true;
        //dd($this->catalogosCategorias);
    }
    public function catalogos_gestionar($value)
    {
        $this->catalogosCategorias="";
        $this->arrrayCategoiasID = [];
        $this->categoriaSelectec = $value;
        $this->catalogos = Catalogo::all();
        $this->catalogosCategorias = CatalogoCategoria::where('categoria_id', $value)->get();
        foreach ($this->catalogosCategorias as $key => $value) {
            //array_push($this->arrrayCategoiasID, $value->id);
            $this->arrrayCategoiasID[$value->catalogo_id] = $value->catalogo_id;
        }
        $this->viendoCatalos = true;

        $this->editname = Categoria::find($this->categoriaSelectec)->name;
    }
    public function save_catalogos()
    {
        //dd($this->arrrayCategoiasID,$this->categoriaSelectec );
        //dd($this->arrrayCategoiasID );
        $this->catalogos = Catalogo::all();
        $eliminar = true;
        $this->catalogosCategorias="";
        $this->catalogosCategorias = CatalogoCategoria::where('categoria_id', $this->categoriaSelectec)->get();
        $contador_coincidencias= CatalogoCategoria::where('categoria_id', $this->categoriaSelectec)->count();
        //dd($this->catalogosCategorias, $contador_coincidencias);
        foreach ($this->catalogosCategorias as $key => $value) {
            foreach ($this->arrrayCategoiasID as $keyy => $valuex) {
                //dump($value->catalogo_id , "El bueno ". $valuex);
                //dd("hola");
                if ($valuex == null && $valuex == '') {
                    if ($value->catalogo_id !== $valuex) {
                        //dd($valuex. " vacio y diferente");
                        $value->delete();
                    }
                } else {
                    if ($value->catalogo_id !== $valuex) {
                        $cc = null;
                        $cc = CatalogoCategoria::where('catalogo_id', $valuex)
                            ->where('categoria_id', $this->categoriaSelectec)
                            ->first();
                        //dump($cc);
                        if ($cc == null) {
                            //dd("nuevo cata ".$valuex);
                            $newValue = CatalogoCategoria::create([
                                'catalogo_id' => $valuex,
                                'categoria_id' => $this->categoriaSelectec,
                            ]);
                            $newValue->save();
                        }
                    }
                }
            }
        }
        if ($contador_coincidencias ==0) {
            foreach ($this->arrrayCategoiasID as $keyy => $valuex) {
                $newValue = CatalogoCategoria::create([
                    'catalogo_id' => $valuex,
                    'categoria_id' => $this->categoriaSelectec,
                ]);
                $newValue->save();
            }
        }
    }

    protected $listeners = ['postAdded' => 'incrementPostCount'];

    public function incrementPostCount()
    {
        //dd("que ondas");
        $this->edit();
        $this->save_catalogos();

    }

    public function edit()
    {
        $editCategoria = Categoria::find($this->categoriaSelectec);
        $editCategoria->update([
            'name'=> $this->editname,
        ]);
        $editCategoria->save();
    }
    public function delete($value)
    {
        $this->deleteCategoria_id = $value;
    }
    public function delete_now()
    {
        $catalogosCategorias = CatalogoCategoria::where('categoria_id',$this->deleteCategoria_id );
        if ($catalogosCategorias) {
            $catalogosCategorias->delete();
        }


        $categoriaDelete = Categoria::find($this->deleteCategoria_id);
        $categoriaDelete->delete();



    }
}
