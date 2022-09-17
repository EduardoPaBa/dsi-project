<?php

namespace App\Http\Livewire\Producto;

use Livewire\Component;
use App\Models\Producto;
use App\Models\ProductoFoto;

class ExpansionInfo extends Component
{
    public $name,$description,$subcategoria_id,$talla,$precio,$disponibilidad,$color,$image,$producto_id,$productoFoto;

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
        return view('livewire.producto.expansion-info');
    }
}
