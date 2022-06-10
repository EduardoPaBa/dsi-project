<?php

namespace App\Http\Livewire\Catalogo;

use Livewire\Component;
use App\Models\Catalogo;
use Livewire\WithFileUploads;

class Agregar extends Component
{
    use WithFileUploads;
    public $name, $valueidCata, $image;

    protected $rules = [
        'image' => 'image'
    ];


    public function mount()
    {
    }
    public function render()
    {
        return view('livewire.catalogo.agregar');
    }
    public function save()
    {
        $image = $this->image->store('catalogo');
        $newValue = Catalogo::create([
            'name' => $this->name,
            'image'=> $image,
        ]);
        $newValue->save();
        $this->clear();
    }

    public function clear()
    {
        $this->name = '';
    }
}
