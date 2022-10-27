<?php

namespace App\Http\Livewire\Solicitud;

use Livewire\Component;
use App\Models\Solicitud;
use App\Models\Departamento;
use App\Models\Municipio;
use Livewire\WithPagination;

class Editar extends Component
{
    public $usuario_id, $estado, $entregado, $direccion, $departamento = null, $municipio = null, $punto_referencia, $nombre_adicional, $apellido_adicional, $telefono;
    public $solicitudes, $solicitud, $solicitud_id;
    public $nombre_departamento, $dep_id, $nombre_municipio, $mun_id;
    public $viendoDetalle = false, $editandoSolicitud = false;
    public $departamentos, $municipios;
    use WithPagination;

    // Validation Rules
    protected $rules = [
        //'usuario_id'=>'required',
        //'estado'=>'required',
        'direccion'=>'required',
        'departamento'=>'required',
        'municipio'=>'required',
        'punto_referencia'=>'required',
        'nombre_adicional'=>'required',
        'apellido_adicional'=>'required',
        'telefono'=>'required'
    ];

    protected $listeners = [
        'deleteSolicitud'=>'destroy'
    ];

    public function mount() {
        $this->viendoDetalle = false;
        $this->editandoSolicitud = false;
    }

    public function render()
    {
        $this->solicitudes = Solicitud::where('usuario_id', auth()->id())->get();
        $this->departamentos = Departamento::all();
        return view('livewire.solicitud.editar');
    }

    public function updateddepartamento($departamento_id) {
        $this->municipios = Municipio::where('DEPSV_ID', $departamento_id)->get();
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
        $this->entregado = $this->solicitud->entregado;
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

    public function edit($solicitud_id) {
        $this->editandoSolicitud = true;
        $this->clear();
        $this->solicitud = Solicitud::findOrFail($solicitud_id);
        $this->estado = Solicitud::findOrFail($solicitud_id)->estado;
        $this->entregado = Solicitud::findOrFail($solicitud_id)->entregado;
        $this->direccion = Solicitud::findOrFail($solicitud_id)->direccion;
        $this->departamento = Solicitud::findOrFail($solicitud_id)->departamento;
        $this->municipios = Municipio::where('DEPSV_ID', $this->departamento)->get();
        $this->nombre_departamento = Departamento::findOrFail($this->departamento);
        $this->municipio = Solicitud::findOrFail($solicitud_id)->municipio;
        $this->nombre_municipio = Municipio::findOrFail($this->municipio);
        $this->punto_referencia = Solicitud::findOrFail($solicitud_id)->punto_referencia;
        $this->nombre_adicional = Solicitud::findOrFail($solicitud_id)->nombre_adicional;
        $this->apellido_adicional = Solicitud::findOrFail($solicitud_id)->apellido_adicional;
        $this->telefono = Solicitud::findOrFail($solicitud_id)->telefono;
    }

    public function update() {
        $this->validate();
        $this->solicitud->update([
            'usuario_id'=>auth()->id(),
            'estado'=>$this->estado,
            'entregado'=>$this->entregado,
            'direccion'=>$this->direccion,
            'departamento'=>$this->departamento,
            'municipio'=>$this->municipio,
            'punto_referencia'=>$this->punto_referencia,
            'nombre_adicional'=>$this->nombre_adicional,
            'apellido_adicional'=>$this->apellido_adicional,
            'telefono'=>$this->telefono
        ]);
        return session()->flash("success", "Solicitud actualizada correctamente");
    }

    public function cancel() {
        $this->editandoSolicitud = false;
        $this->clear();
    }

    public function delete($solicitud_id) {
        $this->solicitud_id = $solicitud_id;
    }

    public function delete_now() {
        Solicitud::find($this->solicitud_id)->delete();
        return session()->flash("success", "Solicitud eliminada correctamente");
    }

    public function clear() {
        $this->usuario_id = '';
        $this->estado = '';
        $this->entregado = '';
        $this->direccion = '';
        $this->departamento = '';
        $this->municipio = '';
        $this->punto_referencia = '';
        $this->nombre_adicional = '';
        $this->apellido_adicional = '';
        $this->telefono = '';
    }
}
