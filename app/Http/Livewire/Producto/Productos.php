<?php

namespace App\Http\Livewire\Producto;

use Livewire\Component;
use App\Models\Producto;
use Producto as GlobalProducto;
use SubCategoria;

class Productos extends Component
{
    public $name,$description,$subcategoria_id,$talla,$precio,$disponibilidad,$color;
    public $productos;
    public $modal = false;

    public function render()
    {
        $this->productos = Producto::all();
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
        $this->modal = false;
    }
    public function editar($id)
    {   
        $productos = Producto::findOrFail($id);
        $this->id = $productos->id;
        $this->name=$productos->name;
        $this->description=$productos->description;
        $this->subcategoria_id =$productos->subcategoria_id;
        $this->talla =$productos->talla;
        $this->precio=$productos->precio;
        $this->disponibilidad=$productos->disponibilidad;
        $this->color=$productos->color;
        $this->abrirModal();
    }
    public function eliminar($id)
    {
        Producto::find($id)->delete();
    }
    public function guardar($id)
    {
        Producto::updateOrCreate(['id'=> $this->id_producto],
        [
            'name' => $this->name,
            'description' =>$this->description,
            'subcategoria_id'=>$this->subcategoria_id,
            'talla'=>$this->talla,
            
        ]);
    }

    
}
