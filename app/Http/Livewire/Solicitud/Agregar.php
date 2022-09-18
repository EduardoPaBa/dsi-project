<?php

namespace App\Http\Livewire\Solicitud;

use Livewire\Component;
use App\Models\Solicitud;
use App\Models\User;
use App\Models\Departamento;
use App\Models\Municipio;
use App\Models\Pedido;
use Illuminate\Support\Facades\Auth;

class Agregar extends Component
{
    public $usuario_id, $estado, $direccion, $departamento = null, $municipio = null, $punto_referencia, $nombre_adicional, $apellido_adicional, $telefono;
    public $departamentos, $municipios;

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

    public function render()
    {
        $this->departamentos = Departamento::all();
        //$this->cart_items= \Cart::session(Auth::user()->id)->getContent();
        $this->cart_items = \Cart::session(Auth::user()->id)->getContent();
        //dd($this->cart_items);
        return view('livewire.solicitud.agregar');
    }

    public function updateddepartamento($departamento_id) {
        $this->municipios = Municipio::where('DEPSV_ID', $departamento_id)->get();
    }

    public function save() {
        $this->validate();
        $newValue = Solicitud::create([
            'usuario_id'=>auth()->id(),
            'estado'=>"DENEGADA",
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

        foreach ($this->cart_items as $cartsito) {
            # code...
            //dd( $cartsito);
            //dd($cartsito['id']);
            $pedidos = Pedido::create([
                'producto_id'=> $cartsito['id'],
                'solicitud_id' => $newValue->id,
                'cantidad' => $cartsito['quantity'],
            ]);
            $pedidos->save();
        }

        \Cart::session(Auth::user()->id)->clear();
        $this->emit('message', 'se a agregado corectamente xd');
        $this->emitTo('catalogo.cart', 'add_cart');
        return session()->flash("success", "Solicitud guardada correctamente");
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
