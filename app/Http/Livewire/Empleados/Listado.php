<?php

namespace App\Http\Livewire\Empleados;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class Listado extends Component
{
    public $name, $roles_id, $roles,$lastname,$email,$phone,$password,$search, $selectedUser,$deleteUser_id;
    protected $rules = [
        'name'=>'required',
        'lastname'=>'required',
        'email'=>'required',
        'role_id'=>'required',
        'password'=>'required',

    ];
    use WithPagination;

    public function render()
    {   $this->roles = Role::all();
        $this->usuarioss= User::all();
        return view('livewire.empleados.listado',[
            'usuarios' => User::where('name', 'like', '%' . $this->search . '%')->where('role_id', '!=', 4)->paginate(5),
        ]);
    }

    public function edit($value)
    {

        $this->clear();
        $this->selectedUser=User::find($value);
        $this->name = User::find($value)->name;
        $this->lastname = User::find($value)->lastname;
        $this->email = User::find($value)->email;
        $this->role_id = User::find($value)->role_id;
        $this->password= User::find($value)->password;

    }

    public function save_edit()
    {   $this->validate();
        $this->selectedUser->update([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'role_id'=> $this->role_id,
            'password' => $this->password,
        ]);
        return session()->flash("success", "Se actualizo correctamente");
    }

    public function delete($value)
    {
        $this->deleteUser_id = $value;
    }
    public function delete_now()
    {
        User::find($this->deleteUser_id)->delete();
        return session()->flash("success", "Se elimino correctamente");
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
