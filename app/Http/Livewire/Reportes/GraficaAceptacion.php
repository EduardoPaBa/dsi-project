<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;
use App\Models\Producto;
use App\Models\Rating;

use Illuminate\Support\Facades\DB;

class GraficaAceptacion extends Component
{
   
    public $nomb,$val;
    public $nombres,$valores;
    public $productos,$calificaciones;
    public $notas;


    public function render()
    {
        /*$this->calificaciones= DB::table('ratings')
                        ->join('productos','ratings.producto_id','=','productos.id')
                        ->select('productos.name as nombreProd','ratings.rating as cali',DB::raw('count(ratings.usuario_id) as usc '))
                        ->get();*/

        $this->notas = DB::select('select productos.name as name, avg(rating) as rating
                                    from ratings
                                    join productos
                                    on ratings.producto_id = productos.id
                                    group by productos.name ');  
                                  
       
       $this->calificaciones= Rating::all();
      //dd( $this->notas);
       $this->productos= Producto::all();
        return view('livewire.reportes.grafica-aceptacion');
    }
}
