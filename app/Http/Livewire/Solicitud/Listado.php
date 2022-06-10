<?php

namespace App\Http\Livewire\Solicitud;

use Livewire\Component;
use App\Models\Solicitud;
use App\Models\Departamento;
use App\Models\Municipio;
use Livewire\WithPagination;

class Listado extends Component
{
    public $valor_checkbox;
    public $solicitudes, $estado, $solicitud;
    public $departamento = null, $municipio = null;
    public $nombre_departamento, $nombre_municipio;
    public $viendoDetalle;
    public $valorEstado;
    use WithPagination;

    protected $rules = ['valor_checkbox' => 'boolean'];

    public function mount() {
        $this->viendoDetalle = false;
    }
    public function render()
    {
        $this->solicitudes = Solicitud::all();
        return view('livewire.solicitud.listado');
    }

    public function verDetalleSolicitud($solicitud_id) {
        $this->viendoDetalle = true;
        $this->solicitud = Solicitud::findOrFail($solicitud_id);
        $this->departamento = Departamento::findOrFail($this->solicitud->departamento);
        $this->municipio = Municipio::findOrFail($this->solicitud->municipio);
        
        $this->nombre_municipio = $this->municipio->MunName;
        $this->nombre_departamento = $this->departamento->DepName;
    }

    public function saveEstado($solicitud_id) {
        $solicitud = Solicitud::findOrFail($solicitud_id);
        $solicitud->estado = $this->valor_checkbox ? "APROBADA":"DENEGADA";
        $solicitud->save();
    }
}
