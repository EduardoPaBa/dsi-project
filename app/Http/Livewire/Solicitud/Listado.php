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
    public $usuario_id, $estado, $direccion, $departamento = null, $municipio = null, $punto_referencia, $nombre_adicional, $apellido_adicional, $telefono;
    public $solicitudes, $solicitud;
    public $nombre_departamento, $nombre_municipio;
    public $viendoDetalle;
    use WithPagination;

    protected $rules = ['valor_checkbox' => 'boolean'];

    public function mount() {
        $this->viendoDetalle = false;
        $this->valor_checkbox = [];
    }
    public function render()
    {
        $this->solicitudes = Solicitud::all();
        
        foreach($this->solicitudes as $solicitud) {
            if($solicitud->estado == "APROBADA") {
                $this->valor_checkbox[$solicitud->id] = true;
            } elseif($solicitud->estado == "DENEGADA") {
                $this->valor_checkbox[$solicitud->id] = false;
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
        $this->solicitud->estado = $this->valor_checkbox[$solicitud_id] ? "APROBADA":"DENEGADA";
        $this->solicitud->save();
    }

    public function getEstado($solicitud_id) {
        $this->solicitud = Solicitud::findOrFail($solicitud_id);
        $this->valor_checkbox[$solicitud_id] = $this->solicitud->estado;
    }
}
