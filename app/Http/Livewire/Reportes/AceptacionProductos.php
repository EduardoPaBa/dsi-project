<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;
use App\Models\User;
use App\Models\Producto;
use App\Models\Rating;
use Livewire\WithPagination;

class AceptacionProductos extends Component
{
    
    protected $rules = [
        
        'usuario_id'=>'required',
        'producto_id'=>'required',

    ];

    public $search,$calificaciones,$name,$email;
    use WithPagination;

    public function render()
    {
        $this->usuarios= User::all();
        $this->calificaciones= Rating::all();
        return view('livewire.reportes.aceptacion-productos',[
       
            
        ]);
    }
}
