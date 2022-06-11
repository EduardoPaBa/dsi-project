<?php

namespace App\Http\Livewire\Producto;

use Livewire\Component;
use App\Models\Producto;
use App\Models\SubCategoria;
use Producto as GlobalProducto;

use App\Models\ProductoFoto;
use Livewire\WithFileUploads;

class Productos extends Component
{
    public $name,$description,$subcategoria_id,$talla,$precio,$disponibilidad,$color,$image,$producto_id,$productoFoto;
    public $productos;
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
    ];

    public function mount()
    {
        $this->productoFoto= ProductoFoto::all();
    }

    public function render()
    {
        $this->productos = Producto::all();
        $this->subcategor = SubCategoria::all();
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
        $this->abrirModal();
    }
    public function borrar($id)
    {
        Producto::find($id)->delete();
        return session()->flash("success", "Se elimino correctamente");
    }

    public function guardar()
    {
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
        $this->validate();
        $image = $this->image->store('producto');
        $newValue = ProductoFoto::create([
            'producto_id' => $productoNew->id,
            'image'=> $image,
        ]);
        $newValue->save();
        //$this->cerrarModal();
        return session()->flash("success", "This is success message");
    }


}
