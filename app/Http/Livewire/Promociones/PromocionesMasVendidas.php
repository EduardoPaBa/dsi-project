<?php

namespace App\Http\Livewire\Promociones;
use Illuminate\Support\Facades\DB;
use App\Models\Promocion;
use Livewire\Component;

class PromocionesMasVendidas extends Component
{
    public $promMasVen;

    public function render()
    {   
        $this->promMasVen = DB::table('promociones')
                            ->join('productos','promociones.producto_id','=','productos.id')
                            ->join('pedidos','promociones.producto_id','=','pedidos.producto_id')
                            ->select('productos.name as nombreProducto','promociones.name as nombrePromo',
                            DB::raw('sum(pedidos.cantidad) as total'),'productos.precio','promociones.descuento')
                            //->where('promociones.producto_id','=','pedidos.producto_id')
                            ->orderBy('total','DESC')
                            ->groupBy('promociones.id')
                            ->get();
        //dd($this->promMasVen);
        return view('livewire.promociones.promociones-mas-vendidas');
    }
}
