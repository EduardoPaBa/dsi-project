<?php

namespace App\Http\Livewire\Solicitud;

use Livewire\Component;
use App\Models\Solicitud;
use App\Models\Departamento;
use App\Models\Municipio;
use Livewire\WithPagination;

class Editar extends Component
{
    public $usuario_id, $estado, $direccion, $departamento = null, $municipio = null, $punto_referencia, $nombre_adicional, $apellido_adicional, $telefono;
    public $solicitudes, $solicitud;
    public $nombre_departamento, $dep_id, $nombre_municipio, $mun_id;
    public $viendoDetalle = false, $editandoSolicitud = false;
    public $departamentos, $municipios;
    use WithPagination;

    // Validation Rules
    protected $rules = [
        'usuario_id'=>'required',
        'estado'=>'required',
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
        $this->solicitud = Solicitud::findOrFail($solicitud_id);
        $this->estado = $this->solicitud->estado;
        $this->direccion = $this->solicitud->direccion;
        $this->departamento = $this->solicitud->departamento;
        $this->municipios = Municipio::where('DEPSV_ID', $this->departamento)->get();
        $this->nombre_departamento = Departamento::findOrFail($this->departamento);
        $this->municipio = $this->solicitud->municipio;
        $this->nombre_municipio = Municipio::findOrFail($this->municipio);
        $this->punto_referencia = $this->solicitud->punto_referencia;
        $this->nombre_adicional = $this->solicitud->nombre_adicional;
        $this->apellido_adicional = $this->solicitud->apellido_adicional;
        $this->telefono = $this->solicitud->telefono;
    }

    public function update() {
        $this->editandoSolicitud = false;
        Solicitud::find($this->solicitud->id)->fill([
            'usuario_id'=>auth()->id(),
            'estado'=>$this->estado,
            'direccion'=>$this->direccion,
            'departamento'=>$this->departamento,
            'municipio'=>$this->municipio,
            'punto_referencia'=>$this->punto_referencia,
            'nombre_adicional'=>$this->nombre_adicional,
            'apellido_adicional'=>$this->apellido_adicional,
            'telefono'=>$this->telefono
        ])->save();
        $this->cancel();
    }

    public function cancel() {
        $this->editandoSolicitud = false;
        $this->clear();
    }

    public function destroy($solicitud_id) {
        Solicitud::find($solicitud_id)->delete();
    }

    public function clear() {
        $this->usuario_id = '';
        $this->estado = '';
        $this->direccion = '';
        $this->departamento = '';
        $this->municipio = '';
        $this->punto_referencia = '';
        $this->nombre_adicional = '';
        $this->apellido_adicional = '';
        $this->telefono = '';
    }
}
