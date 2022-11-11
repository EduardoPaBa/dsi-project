<?php

namespace App\Http\Livewire\Promociones;

use Livewire\Component;
use App\Models\Promocion;
use App\Models\Producto;
use Livewire\WithFileUploads;
use Illuminate\Contracts\Validation\Rule;
use Psy\CodeCleaner\FunctionContextPass;

class Agregar extends Component
{
    public $name,$borrarPromocion,$description,$producto_id,$descuento,$duracion_dias,$descuento_id,$promocion_id;
    public $promociones,$image;
    public $productos;
    public $modal = false;
    use WithFileUploads;

    public function mount()
    {
        $this->idFile= rand();
    }
   
    public function render()
    {
        $this->promociones = Promocion::all();
        $this->productos = Producto::all();
        return view('livewire.promociones.agregar');
    }
    protected $rules = [
        'name' => 'required',
        'description' => 'required',
        'producto_id' => 'required',
        'descuento' => 'required',
        'duracion_dias' => 'required',
        'image' => 'image',

    ];


    

    public function crear(){
        $this->limpiarCampos();
        $this->abrirModal();
    }

    public function limpiarCampos(){
        $this->name='';
        $this->description='';
        $this->producto_id='';
        $this->descuento='';
        $this->duracion_dias='';
    }
    public function abrirModal(){
        $this->modal=true;
    }
    public function cerrarModal(){
        $this->promocion_id=null;
        $this->modal=false;
    }
    public function editar($id){
        $promocion = Promocion::findOrFail($id);
        $this->promocion_id = $promocion->id;
        $this->name = $promocion->name;
        $this->description = $promocion->description;
        $this->producto_id = $promocion->producto_id;
        $this->descuento = $promocion->descuento;
        $this->duracion_dias = $promocion->duracion_dias;
        $this->abrirModal();
        
    }
    public function borrar($borrarPromocion){
        $this->borrarPromocion = $borrarPromocion;
    }
    public function borrar_now(){
        Promocion::find($this->borrarPromocion)-> delete();
        return session()->flash("success", "Se elimino correctamente");
    }
    public function guardar(){
        $this->validate();
        $image = $this->image->store('promociones', 'public');
        $id=$this->promocion_id;
        $promocionNew = Promocion::updateOrCreate(['id'=> $id],
        [
            'name' =>  $this->name,
            'description' => $this->description,
            'producto_id' => $this->producto_id,
            'descuento' => $this->descuento,
            'duracion_dias' => $this->duracion_dias,
            'image'=> $image,
        ]);
        
        $promocionNew->save();
        $this->clear();
        return session()->flash("success", "This is success message");
    }

    public function clear()
    {
        $this->name = '';
        $this->description = '';
        $this->producto_id = '';
        $this->descuento = '';
        $this->duracion_dias = '';
        $this->image=null;
        $this->reset(['image',]);
        $this->idFile= rand();
    }

    
}
