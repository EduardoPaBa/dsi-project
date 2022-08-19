<?php

namespace App\Http\Livewire\ContactForm;

use Illuminate\Http\Request;

use Livewire\Component;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;

class Correos extends Component
{



    public function render()
    {
        return view('livewire.contact-form.correos');
    }
}
