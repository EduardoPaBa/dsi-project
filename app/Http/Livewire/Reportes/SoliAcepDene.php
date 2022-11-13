<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
use App\Models\Solicitud;
use App\Models\SolicitudEspecial;
use App\Models\Producto;
use App\Models\Pedido;

class SoliAcepDene extends Component
{
    public  $search, $solicitudes, $solicitudesEspecia, $productos, $pedidos,
            $CsolicitudesAp,$CsolicitudesDn, $CsolicitudesEspeciaAp,$CsolicitudesEspeciaDn;
    use WithPagination;

    public function mount(){
        /* $this->solicitudes=Solicitud::all();
        $this->solicitudesEspecia=SolicitudEspecial::all(); */
        $this->productos=Producto::all();
        $this->pedidos=Pedido::all();

        //-------Solicitudes-----------------
        $this->CsolicitudesAp=DB::table('solicitudes')->where('estado', '=', 'APROBADA')
        ->get();
        $this->CsolicitudesAp = count($this->CsolicitudesAp);

        $this->CsolicitudesDn=DB::table('solicitudes')->where('estado', '=', 'DENEGADA')
        ->get();
        $this->CsolicitudesDn = count($this->CsolicitudesDn);

        //-------Solicitudes Especiales-----------------
        $this->CsolicitudesEspeciaAp=DB::table('solicitudespeciales')->where('estado', '=', 'APROBADA')
        ->get();
        $this->CsolicitudesEspeciaAp = count($this->CsolicitudesEspeciaAp);

        $this->CsolicitudesEspeciaDn=DB::table('solicitudespeciales')->where('estado', '=', 'DENEGADA')
        ->get();
        $this->CsolicitudesEspeciaDn = count($this->CsolicitudesEspeciaDn);

        //--AQUI OBTENGO TODOS LOS PRODUCTOS QUE FUERON DENEGADOS CON UN CONTADOR DE CUANTAS VECES
        $this->productos = DB::table('productos')
            ->join('pedidos',       'productos.id',     '=',    'pedidos.producto_id')
            ->join('solicitudes',   'solicitudes.id',   '=',    'pedidos.solicitud_id')
            ->where('solicitudes.estado', '=', 'DENEGADA')
            ->selectRaw("productos.name as name")
            ->selectRaw("SUM(pedidos.cantidad) as total")
            ->groupBy('productos.id')
            ->orderBy('total', 'desc')
            ->get();


    }
    public function render()
    {
        return view('livewire.reportes.soli-acep-dene');
    }
}
