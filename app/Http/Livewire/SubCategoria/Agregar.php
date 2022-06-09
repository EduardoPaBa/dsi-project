<?php

namespace App\Http\Livewire\SubCategoria;

use Livewire\Component;
use App\Models\SubCategoria;
use App\Models\Categoria;

class Agregar extends Component
{
    public $name, $valueidCate;
    

    public function mount()
    {
    }
    public function render()
    {
        return view('livewire.subcategoria.agregar');
    }
    public function save()
    {
        $newValue = SubCategoria::create([
            'name' => $this->name,
            'categoria_id'=> $this->valueidCate,
        ]);
        $newValue->save();
        $this->clear();
    }
    
    public function clear()
    {
        $this->name = '';
        $this->valueidCate = '';
    }
    public function ShowCategorias(){

        require_once 'Models/Categoria.php';
        $categoria= new Categoria();
        $categorias= $categoria->getAll();
        return $categorias;
    }

}
