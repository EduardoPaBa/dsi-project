<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Role;

class Example extends Component
{
    public $user, $role_user_log;
    public function mount()
    {
        //Demostracion de como se recupera informacion de la BD
        /* y de como
        se puede manejar la informacion entre el back y el front */
        $this->user = Auth::user();
        //aqui hago uso de una propiedad definida en el modelo de usuarios como un metodo 
        //en si es el uso del orm que me permite acceder a la informacion especifica sin necesidad de hacer un find 
        $this->role_user_log = User::find($this->user->id)->role->name;
    }
    public function render()
    {
        return view('livewire.example');
    }
}
