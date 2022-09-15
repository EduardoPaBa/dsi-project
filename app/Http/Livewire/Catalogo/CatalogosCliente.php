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
use Illuminate\Support\Facades\Auth;
use App\Models\ProductoFoto;


class CatalogosCliente extends Component
{
    public  $nameSelected, $catalogosAll, $cateAll, $subcateAll, $productosAll,$producAnad,
            //variables para control de lo seleccionado
            $catalogo, $cataCate, $categoria, $subCategoria, $producto,
            //variables para el conjunto a seleccionar
            $categorias, $subcategorias, $productos,$productoFoto,
            $CatalogoSele,$CategoriaSele,$SubCategoriaSele ;
    use WithPagination;
    protected $rules = [
        'id'=>'id',
        'image' => 'image',
        'name' => 'string',
    ];

    public function mount()
    {
        $this->productoFoto= ProductoFoto::all();
        $this->nameSelected="Catálogos";
        $this->CatalogoSele =false;
        $this->CategoriaSele =false;
        $this->SubCategoriaSele  =false;
        $this->categorias=[];
        $this->subcategorias=[];
        $this->productosAll=Producto::all();

    }
    public function render()
    {
        $this->catalogos = Catalogo::all();
        return view('livewire.catalogo.catalogos-cliente');
    }

    public function add_cart(Producto $producto)
    {
        $this->producAnad= $producto;
        //dd($this->producAnad);

        \Cart::session(Auth::user()->id)->add(array(
            'id' => $this->producAnad->id,
            'name' => $this->producAnad->name,
            'price' => $this->producAnad->precio,
            'quantity' => 1,

        ));

        $this->emit('message', 'se a agregado corectamente xd');
        $this->emitTo('catalogo.cart', 'add_cart');


    }


    //METODO PARA VALIDAR Y MOSTRAR LAS CATEGORIAS ASOCIADAS AL CATALOGO
    public function catalogoSelected($value)
    {
        $this->categorias=[];
        $this->catalogo=$value;
        //dd($this->catalogo);
        $this->cataCate= CatalogoCategoria::where('catalogo_id', $this->catalogo)->get();
        //dd($this->cataCate);
        $this->CatalogoSele = true;
        $this->nameSelected="Categoría";
        //dd($this->cataCate);

        foreach ($this->cataCate as $key => $value) {
            $cate=[];
            $cate= Categoria::find($value->categoria_id);
            //dump($cate, $value->categoria_id);
            array_push($this->categorias, $cate);
        }
        //dd($this->cataCate);

    }

    public function categoriaSelected($value)
    {
        $this->categoria= $value;
        $this->CatalogoSele = false;
        $this->CategoriaSele= true;
        $this->nameSelected="SubCategoría";
        $this->subcategorias= SubCategoria::where('categoria_id', $this->categoria)->get();
        //dd($this->cataCate);
    }
    public function subCategoriaSelected($value)
    {
        $this->subCategoria=$value;
        $this->CatalogoSele = false;
        $this->CategoriaSele= false;
        $this->SubCategoriaSele = true;
        $this->nameSelected="Productos";
        $this->productos= Producto::where('subcategorias_id', $this->subCategoria)->get();
    }

    public function volverCatalogos()
    {
        $this->nameSelected="Catálogos";
        $this->CatalogoSele = false;
        $this->CategoriaSele = false;
        $this->SubCategoriaSele = false;
    }

    public function volverCate()
    {
        $this->nameSelected="Categoría";
        //dd($this->catalogo);



        $this->cataCate= CatalogoCategoria::where('catalogo_id', $this->catalogo)->get();
        //dd($this->cataCate);
        $this->CatalogoSele = true;
        //$this->nameSelected="Categoría";
        //dd($this->cataCate);
        $this->categorias=[];
        foreach ($this->cataCate as $key => $value) {
            $cate=[];
            $cate= Categoria::find($value->categoria_id);
            //dump($cate, $value->categoria_id);
            array_push($this->categorias, $cate);
        }

        //$this->categorias=Categoria::all();
        //$this->CatalogoSele=true;
        $this->CategoriaSele = false;
        $this->SubCategoriaSele = false;
        //dd($this->categorias);
        //dd($this->catalogos);
    }

    public function volverSubCate()
    {
        $this->CatalogoSele=false;
        $this->CategoriaSele = true;
        $this->SubCategoriaSele = false;
        $this->nameSelected="SubCategoría";
        //dd($this->categoria);
        //$this->subcategorias= SubCategoria::all();
        $this->subcategorias= SubCategoria::where('categoria_id', $this->categoria)->get();
    }

}
