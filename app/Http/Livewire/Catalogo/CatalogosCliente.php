<?php

namespace App\Http\Livewire\Catalogo;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Catalogo;
use Livewire\WithPagination;


class CatalogosCliente extends Component
{

    use WithPagination;
    protected $rules = [
        'id'=>'id',
        'image' => 'image',
        'name' => 'string',
    ];

    
    public function render()
    {
        $this->catalogos = Catalogo::all();
        return view('livewire.catalogo.catalogos-cliente');
    }
}
