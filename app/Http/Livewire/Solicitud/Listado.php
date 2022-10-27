<?php

namespace App\Http\Livewire\Solicitud;

use Livewire\Component;
use App\Models\Solicitud;
use App\Models\Departamento;
use App\Models\Municipio;
use Livewire\WithPagination;

class Listado extends Component
{
    public $valor_checkbox_estado, $valor_checkbox_entregado;
    public $usuario_id, $estado, $entregado, $direccion, $departamento = null, $municipio = null, $punto_referencia, $nombre_adicional, $apellido_adicional, $telefono;
    public $solicitudes, $solicitud;
    public $nombre_departamento, $nombre_municipio;
    public $viendoDetalle;
    use WithPagination;

    protected $rules = [
        'valor_checkbox_estado' => 'boolean',
        'valor_checkbox_entregado' => 'boolean'
    ];

    public function mount() {
        $this->viendoDetalle = false;
        $this->valor_checkbox = [];
    }
    public function render()
    {
        $this->solicitudes = Solicitud::all();
        
        foreach($this->solicitudes as $solicitud) {
            if($solicitud->estado == "APROBADA") {
                $this->valor_checkbox_estado[$solicitud->id] = true;
            } elseif($solicitud->estado == "DENEGADA") {
                $this->valor_checkbox_estado[$solicitud->id] = false;
            }

            if($solicitud->entregado == "0") {
                $this->valor_checkbox_entregado[$solicitud->id] = false;
            } elseif($solicitud->entregado = "1") {
                $this->valor_checkbox_entregado[$solicitud->id] = true;
            }
        }

        return view('livewire.solicitud.listado');
    }

    public function verDetalleSolicitud($solicitud_id) {
        $this->viendoDetalle = true;
        /*$this->solicitud = Solicitud::findOrFail($solicitud_id);
        $this->estado = $this->solicitud->estado;
        $this->departamento = Departamento::findOrFail($this->solicitud->departamento);
        $this->municipio = Municipio::findOrFail($this->solicitud->municipio);
        
        $this->nombre_municipio = $this->municipio->MunName;
        $this->nombre_departamento = $this->departamento->DepName;*/
        $this->solicitud = Solicitud::findOrFail($solicitud_id);
        $this->estado = $this->solicitud->estado;
        $this->estado = $this->solicitud->entregado;
        $this->direccion = $this->solicitud->direccion;
        
        $this->departamento = Departamento::findOrFail($this->solicitud->departamento);
        $this->nombre_departamento = $this->departamento->DepName;
        $this->municipio = Municipio::findOrFail($this->solicitud->municipio);
        $this->nombre_municipio = $this->municipio->MunName;
        
        $this->punto_referencia = $this->solicitud->punto_referencia;
        $this->nombre_adicional = $this->solicitud->nombre_adicional;
        $this->apellido_adicional = $this->solicitud->apellido_adicional;
        $this->telefono = $this->solicitud->telefono;
    }

    public function saveEstado($solicitud_id) {
        $this->solicitud = Solicitud::findOrFail($solicitud_id);
        $this->solicitud->estado = $this->valor_checkbox_estado[$solicitud_id] ? "APROBADA":"DENEGADA";
        $this->solicitud->save();
    }

    public function getEstado($solicitud_id) {
        $this->solicitud = Solicitud::findOrFail($solicitud_id);
        $this->valor_checkbox_estado[$solicitud_id] = $this->solicitud->estado;
    }

    public function saveEntregado($solicitud_id) {
        $this->solicitud = Solicitud::findOrFail($solicitud_id);
        $this->solicitud->entregado = $this->valor_checkbox_entregado[$solicitud_id] ? "1":"0";
        if($this->solicitud->entregado == "1")
            $this->solicitud->estado = 'APROBADA';
        elseif($this->solicitud->entregado == "0")
            $this->solicitud->estado = 'DENEGADA';
        $this->solicitud->save();
    }

    public function getEntregado($solicitud_id) {
        $this->solicitud = Solicitud::findOrFail($solicitud_id);
        $this->valor_checkbox_entregado[$solicitud_id] = $this->solicitud->entregado;
    }
}
