<?php

namespace App\Http\Livewire\Catalogo;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Catalogo;
use App\Models\Categoria;
use App\Models\CatalogoCategoria;
use App\Models\SubCategoria;
use App\Models\Producto;
use Livewire\WithPagination;


class CatalogosCliente extends Component
{
    public  $nameSelected, $catalogo, $cataCate, $categorias, $categoria, $subCategoria, $productos,
            $CataSele,$CateSele,$SubCateSele;
    use WithPagination;
    protected $rules = [
        'id'=>'id',
        'image' => 'image',
        'name' => 'string',
    ];

    public function mount()
    {
        $this->nameSelected="Catálogos";
        $this->CataSele =false;
        $this->CateSele =false;
        $this->SubCateSele =false;
        $this->categorias=[];

    }
    public function render()
    {
        $this->catalogos = Catalogo::all();
        return view('livewire.catalogo.catalogos-cliente');
    }
    public function catalogoSelected($value)
    {
        $this->catalogo=$value;
        //dd($this->catalogo);
        $this->cataCate= CatalogoCategoria::where('catalogo_id', $this->catalogo)
        ->get();
        $this->CataSele = true;
        $this->nameSelected="Categoría";
        //dd($this->cataCate);
        //$this->cataCate=[];
        foreach ($this->cataCate as $key => $value) {
            $cate=[];
            $cate= Categoria::find($value->categoria_id);
            //dd($cate, $value->categoria_id);
            array_push($this->categorias, $cate);
        }
        //dd($this->cataCate);

    }
    public function volverCatalogos()
    {
        $this->nameSelected="Catalogos";
        $this->CataSele = false;
        $this->CateSele = false;
        $this->cataCate = [];
        $this->categorias = [];

    }
    public function categoriaSelected($value)
    {
        $this->categoria= $value;
        $this->CataSele = false;
        $this->CateSele= true;
        $this->nameSelected="SubCategorias";
        $this->cataCate= SubCategoria::where('categoria_id', $this->categoria)
        ->get();
        //dd($this->cataCate);
    }
    public function subCategoriaSelected($value)
    {
        $this->subCategoria=$value;
        $this->CataSele = false;
        $this->CateSele= false;
        $this->SubCateSele= true;
        $this->nameSelected="Productos";
        $this->productos= Producto::where('subcategorias_id', $this->subCategoria)
        ->get();
    }

}
