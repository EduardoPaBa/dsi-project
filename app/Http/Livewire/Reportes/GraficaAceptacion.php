<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Rating;

use Illuminate\Support\Facades\DB;

class GraficaAceptacion extends Component
{
    public $Arraynombres= [],$Arrayvalores=[];
    public $nomb,$val;
    public $nombres,$valores;
    public $productos,$calificaciones;


    public function render()
    {
        /*$this->calificaciones= DB::table('ratings')
                        ->join('productos','ratings.producto_id','=','productos.id')
                        ->select('productos.name as nombreProd','ratings.rating as cali',DB::raw('count(ratings.usuario_id) as usc '))
                        ->get();*/

       $this->calificaciones= Rating::all();
       
       $this->productos= Producto::all();
        return view('livewire.reportes.grafica-aceptacion');
    }
}
