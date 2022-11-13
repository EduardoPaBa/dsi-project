<?php

namespace App\Http\Livewire\Reportes;

use Livewire\Component;
use App\Models\User;
use Illuminate\Http\Request;
use Charts;
use Livewire\WithPagination;
class NuevosUsuarios extends Component
{
   
    public $search;

    public function mount(){
        
    }
    use WithPagination;
    public function render()

        
    {
        
        $this->users= User::all();
      
        return view('livewire.reportes.nuevos-usuarios',[
            'usuarios' => User::where('created_at', 'like', '%' . $this->search . '%')->where('role_id', '=', 4)->paginate(5),
        ]);
    }

    


    
}
