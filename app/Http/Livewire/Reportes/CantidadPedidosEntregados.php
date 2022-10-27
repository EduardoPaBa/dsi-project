<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CantidadPedidosEntregados extends Component
{
    public $pedidos = array(), $cantidad = 0;
    
    public function render()
    {
        $this->pedidos = DB::table('solicitudes as s')
                            ->join('departamentos as d', 'd.id', '=', 's.departamento')
                            ->join('municipios as m', 'm.id', '=', 's.municipio')
                            ->join('users as u', 'u.id', '=', 's.usuario_id')
                            ->select('u.name', 'u.email', 's.entregado', 'd.DepName', 'm.MunName')
                            ->where($column = 'entregado', $value = '1')
                            ->get();
        $this->cantidad = count($this->pedidos);
        return view('livewire.reportes.cantidad-pedidos-entregados');
    }
}
