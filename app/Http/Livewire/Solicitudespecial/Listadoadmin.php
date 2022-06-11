<?php

namespace App\Http\Livewire\Solicitudespecial;

use Livewire\Component;
use App\Models\SolicitudEspecial;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Departamento;
use App\Models\Municipio;

class Listadoadmin extends Component
{
    public $valor_checkbox;
    public $soliespeciales, $estado, $solicitud;
    public $search,$deleteSoliEspecial_id;

    public $usuario_id,$description,$link, $direccion, $departamento = null, $municipio = null, $punto_referencia, $nombre_adicional, $apellido_adicional, $telefono;
    public $departamentos, $municipios,$selectedSoliEspecial;

    protected $rules = ['valor_checkbox' => 'boolean'];

    public function mount() {
       
        $this->valor_checkbox = [];
    }
    use WithPagination;
    public function render()

    {   
        $this->departamentos = Departamento::all();
        $this->municipios = Municipio::all();
        $this->soliespeciales= SolicitudEspecial::all();
        $this->soliespecial= SolicitudEspecial::all();

        foreach($this->soliespeciales as $solicitud) {
            if($solicitud->estado == "APROBADA") {
                $this->valor_checkbox[$solicitud->id] = true;
            } elseif($solicitud->estado == "DENEGADA") {
                $this->valor_checkbox[$solicitud->id] = false;
            }
        }


        return view('livewire.solicitudespecial.listadoadmin', [
            'soliespeciales' => SolicitudEspecial::where('id', 'like', '%' . $this->search . '%')->paginate(5),
        ]);
    }
    public function show($value)
    {
        
        
        $this->selectedSoliEspecial=SolicitudEspecial::find($value);
        $this->link = SolicitudEspecial::find($value)->link;
        $this->description = SolicitudEspecial::find($value)->description;
        $this->direccion = SolicitudEspecial::find($value)->direccion;
        $this->departamento = SolicitudEspecial::find($value)->departamento;
        $this->municipio = SolicitudEspecial::find($value)->municipio;
        $this->punto_referencia = SolicitudEspecial::find($value)->punto_referencia;
        $this->nombre_adicional = SolicitudEspecial::find($value)->nombre_adicional;
        $this->apellido_adicional = SolicitudEspecial::find($value)->apellido_adicional;
        $this->telefono = SolicitudEspecial::find($value)->telefono;
        
        
    }
    public function updateddepartamento($departamento_id) {
        $this->municipios = Municipio::where('DEPSV_ID', $departamento_id)->get();
    }

    public function saveEstado($value) {
        $solicitud = SolicitudEspecial::findOrFail($value);
        
        $solicitud->estado = $this->valor_checkbox[$value] ? "APROBADA":"DENEGADA";
        $solicitud->save();
        return session()->flash("success", "Se actualizo cambio el estado correctamente");
    }
    public function getEstado($value) {
        $this->solicitud = SolicitudEspecial::findOrFail($value);
        $this->valor_checkbox[$value] = $this->solicitud->estado;
    }
}
