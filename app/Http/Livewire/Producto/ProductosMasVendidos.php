<?php

namespace App\Http\Livewire\Producto;

use Livewire\Component;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;
use function Symfony\Component\String\b;

class ProductosMasVendidos extends Component
{   
    public $pedidos,$productos,$idprod;
    Public $pos;
    public $arrayProducto = array();
    public $arrayCantidad = array();
    public function render()
    {   
        $this->pedidos = DB::table('pedidos')
                            ->join('productos','pedidos.producto_id','=','productos.id')
                            ->select('productos.name','pedidos.producto_id',
                            DB::raw('sum(pedidos.cantidad) as total'),'productos.precio','productos.description','productos.talla')
                            ->orderBy('total','desc')
                            ->groupBy('pedidos.producto_id')
                            ->get();

        //dd($this->pedidos);
        $this->productos = Producto::all();
        return view('livewire.producto.productos-mas-vendidos');
    }

}
