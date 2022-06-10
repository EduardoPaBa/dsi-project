<?php

namespace App\Http\Livewire\Solicitudespecial;

use Livewire\Component;
use App\Models\SolicitudEspecial;
use App\Models\User;
use App\Models\Departamento;
use App\Models\Municipio;

class Agregar extends Component
{
    public $usuario_id, $estado,$description,$link, $direccion, $departamento = null, $municipio = null, $punto_referencia, $nombre_adicional, $apellido_adicional, $telefono;
    public $departamentos, $municipios;

    // Validation Rules
    protected $rules = [
        'usuario_id'=>'required',
        'estado'=>'required',
        'link'=>'required',
        'description'=>'required',
        'direccion'=>'required',
        'departamento'=>'required',
        'municipio'=>'required',
        'punto_referencia'=>'required',
        'nombre_adicional'=>'required',
        'apellido_adicional'=>'required',
        'telefono'=>'required'
    ];


    public function render()
    {
         $this->departamentos = Departamento::all();
        return view('livewire.solicitudespecial.agregar');
    }
    public function updateddepartamento($departamento_id) {
        $this->municipios = Municipio::where('DEPSV_ID', $departamento_id)->get();
    }
    public function save() {
        $newValue = SolicitudEspecial::create([
            'usuario_id'=>auth()->id(),
            'estado'=>$this->estado,
            'link'=>$this->link,
            'description'=>$this->description,
            'direccion'=>$this->direccion,
            'departamento'=>$this->departamento,
            'municipio'=>$this->municipio,
            'punto_referencia'=>$this->punto_referencia,
            'nombre_adicional'=>$this->nombre_adicional,
            'apellido_adicional'=>$this->apellido_adicional,
            'telefono'=>$this->telefono
        ]);
        $newValue->save();
        $this->clear();
    }
    public function clear() {
        $this->usuario_id = '';
        $this->estado = '';
        $this->link = '';
        $this->description = '';
        $this->direccion = '';
        $this->departamento = '';
        $this->municipio = '';
        $this->punto_referencia = '';
        $this->nombre_adicional = '';
        $this->apellido_adicional = '';
        $this->telefono = '';
    }
}
