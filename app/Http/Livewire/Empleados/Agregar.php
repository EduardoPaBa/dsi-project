<?php

namespace App\Http\Livewire\Empleados;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class Agregar extends Component
{

    public $name, $role_id, $roles,$lastname,$email,$phone,$password;
    protected $rules = [
        'name'=>'required',
        'lastname'=>'required',
        'email'=>'required',
        'role_id'=>'required',
        'password'=>'required',

    ];


    public function render()
    {   $this->roles = Role::where('id', '!=', '4')->get();
        return view('livewire.empleados.agregar');
    }

    public function save()
    {   $this->validate();
        $newValue = User::create([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'role_id'=> $this->role_id,
            'password' => $this->password,

        ]);
        $newValue->save();
        $this->clear();
        return session()->flash("success", "Se guardo correctamente");
    }
     public function clear()
    {
        $this->name = '';
        $this->lastname = '';
        $this->email = '';
        $this->role_id = '';
        $this->password = '';
    }
}
