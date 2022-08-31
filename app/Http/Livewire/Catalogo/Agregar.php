<?php

namespace App\Http\Livewire\Catalogo;

use Livewire\Component;
use App\Models\Catalogo;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class Agregar extends Component
{
    use WithFileUploads;
    public $name, $valueidCata, $image, $idFile;

    protected $rules = [
        'image' => 'image',
        'name' => 'string',
    ];


    public function mount()
    {
        $this->idFile= rand();
    }
    public function render()
    {
        return view('livewire.catalogo.agregar');
    }
    public function save()
    {
        $this->validate();
        //dd( $this->image );
        $image = $this->image->store('catalogo', 'public');
        
        $newValue = Catalogo::create([
            'name' => $this->name,
            'image'=> $image,
        ]);
        $newValue->save();
        $this->clear();
        return session()->flash("success", "This is success message");

    }

    public function clear()
    {
        $this->name = '';
        $this->image=null;
        $this->reset(['image',]);
        $this->idFile= rand();
    }
}
