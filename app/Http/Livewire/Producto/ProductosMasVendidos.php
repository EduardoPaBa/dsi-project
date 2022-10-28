<?php

namespace App\Http\Livewire\Producto;

use Livewire\Component;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Block\Document;
use PhpParser\Node\Stmt\Else_;
use App\Http\Livewire\Producto\Alert;
use function PHPUnit\Framework\isEmpty;
use function Symfony\Component\String\b;

class ProductosMasVendidos extends Component
{   
    public $pedidos,$productos,$idprod;
    Public $pos,$inicio,$fin;
    public $arrayProducto = array();
    public $arrayCantidad = array();
    public function render()

    {   
        /*$this->pedidos = DB::table('pedidos')
                            ->join('productos','pedidos.producto_id','=','productos.id')
                            ->select('productos.name','pedidos.producto_id',
                            DB::raw('sum(pedidos.cantidad) as total'),'productos.precio','productos.description','productos.talla')
                            ->orderBy('total','desc')
                            ->groupBy('pedidos.producto_id')
                            ->get();*/

        
        //dd($this->pedidos);
        $this->productos = Producto::all();
        //dd($this->productos);
        return view('livewire.producto.productos-mas-vendidos');
    }
    public function limpiarFecha(){
        $this->inicio='';
        $this->fin='';
        
    }

    public function limpiarPedido(){
        $this->pedidos = null;
    }

    public function ConsultaProdMasVendidos(){
        //$this->inicio = '2022-08-01';
        //$this->fin = "2022-10-31";
        
        $this->pedidos=null;
        if($this->inicio < $this->fin){
            $this->pedidos = DB::table('pedidos')
                        ->leftJoin('productos','pedidos.producto_id','=','productos.id')
                        ->select('productos.name','pedidos.producto_id',
                        DB::raw('sum(pedidos.cantidad) as total'),'productos.precio','productos.description','productos.talla','pedidos.created_at as fecha')
                        ->whereBetween('pedidos.created_at',[$this->inicio , $this->fin])
                        ->orderBy('total','desc')
                        ->groupBy('pedidos.id')
                        ->get();

                        //dd($this->pedidos);
        }else{
            //dd('fallo');
            return session()->flash("success", "La fecha de inicio tiene que ser menor que la final");
        }
        $this->limpiarFecha();
        
        
    }

}
