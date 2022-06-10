<?php

namespace App\Http\Livewire\Solicitudespecial;

use Livewire\Component;
use App\Models\SolicitudEspecial;
use App\Models\User;
use App\Models\Departamento;
use App\Models\Municipio;
use Livewire\WithPagination;

class Listado extends Component
{
    public $search,$deleteSoliEspecial_id;

    public $usuario_id, $estado,$description,$link, $direccion, $departamento = null, $municipio = null, $punto_referencia, $nombre_adicional, $apellido_adicional, $telefono;
    public $departamentos, $municipios,$selectedSoliEspecial;

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

     use WithPagination;
    public function render()
    {   $this->departamentos = Departamento::all();
        $this->soliespeciales= SolicitudEspecial::all();
        return view('livewire.solicitudespecial.listado', [
            'soliespeciales' => SolicitudEspecial::where('id', 'like', '%' . $this->search . '%')->paginate(5),
        ]);
    }
    public function updateddepartamento($departamento_id) {
        $this->municipios = Municipio::where('DEPSV_ID', $departamento_id)->get();
    }
    public function edit($value)
    {
        //dd($value);
        
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
    public function save_edit()
    {
        $this->selectedSoliEspecial->update([
            'link'=>$this->link,
            'description'=>$this->description,
            'direccion'=>$this->direccion,
            'departamento'=>$this->departamento,
            'municipio'=>$this->municipio,
            'punto_referencia'=>$this->punto_referencia,
            'nombre_adicional'=>$this->nombre_adicional,
            'apellido_adicional'=>$this->apellido_adicional,
            'telefono'=>$this->telefono,
        ]);
    }

    public function delete($value)
    {
        $this->deleteSoliEspecial_id = $value;
    }
    public function delete_now()
    {
        SubCategoria::find($this->deleteSoliEspecial_id)->delete();
    }


}
