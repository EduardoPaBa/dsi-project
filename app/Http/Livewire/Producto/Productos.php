<?php

namespace App\Http\Livewire\Producto;

use Livewire\Component;
use App\Models\Producto;
use App\Models\SubCategoria;
use App\Models\Promocion;
use Producto as GlobalProducto;

use App\Models\ProductoFoto;
use Exception;
use Livewire\WithFileUploads;


class Productos extends Component
{
    public $name,$description,$subcategoria_id,$talla,$precio,$disponibilidad,$color,$image,$producto_id,$productoFoto;
    public $productos,$productoPromo;
    public $subcategorias;
    public $modal = false;
    use WithFileUploads;
    protected $rules = [
        'image' => 'required',
        'name' => 'required',
        'description' => 'required',
        'subcategoria_id' => 'required',
        'talla' => 'required',
        'precio' => 'required',
        'disponibilidad' => 'required',
        'color' => 'required',
        'subcategorias' => 'required',
    ];

    public function mount()
    {
        $this->productoFoto= ProductoFoto::all();
    }

    public function render()
    {
        $this->productos = Producto::all();
        $this->subcategorias = SubCategoria::all();
        return view('livewire.producto.productos');
    }

    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function limpiarCampos(){
        $this->name='';
        $this->description='';
        $this->subcategoria_id ='';
        $this->talla = '';
        $this->precio='';
        $this->disponibilidad='';
        $this->color='';
    }

    public function abrirModal()
    {
        $this->modal=true;
    }

    public function cerrarModal()
    {
        $this->producto_id=null;
        $this->modal = false;
    }
    public function editar($id)
    {
        $productos = Producto::findOrFail($id);
        //dd($productos);
        $this->producto_id = $productos->id;
        $this->name=$productos->name;
        $this->description=$productos->description;
        $this->subcategoria_id =$productos->subcategorias_id;
        $this->talla =$productos->talla;
        $this->precio=$productos->precio;
        $this->disponibilidad=$productos->disponibilidad;
        $this->color=$productos->color;
        //$this->subcategorias->name= $productos->subcategorias->name;
        $this->abrirModal();
    }
    public function borrar($id){
        $this->producto_id=$id;
    }
    public function borrar_now()
    {
        try{
            Producto::find($this->producto_id)->delete();
            return session()->flash("success", "Se elimino correctamente");
        }catch(Exception $e){
            return session()->flash("success", "El producto tiene una promocion");
        }
        //Promocion::where('producto_id')
        /*$this->productoPromo = Promocion::where('producto_id', $this->producto_id)->get();
        if(!$this->productoPromo){
            return session()->flash("success", "El producto tiene una promocion");
        }else{
            Producto::find($this->producto_id)->delete();
            return session()->flash("success", "Se elimino correctamente");
        }*/
    }


    public function guardar()
    {
        $this->validate();
        //dd($this->producto_id);
        $id=$this->producto_id;
        $productoNew = Producto::updateOrCreate(['id'=> $id],
        [

            'name' => $this->name,
            'description' =>$this->description,
            'subcategorias_id'=>$this->subcategoria_id,
            'precio'=>$this->precio,
            'disponibilidad'=>$this->disponibilidad,
            'color'=>$this->color,
            'talla'=>$this->talla,
        ]);



        //dd($productoNew);

        $image = $this->image->store('producto', 'public');
        $newValue = ProductoFoto::create([
            'producto_id' => $productoNew->id,
            'image'=> $image,
        ]);
        $newValue->save();
        //$this->cerrarModal();
        return session()->flash("success", "This is success message");

        



    }


}
