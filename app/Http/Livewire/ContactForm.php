<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $body;

    public function submit()
    {
        $validatedData = $this->validate([
            'name' => 'required',
            'email' => 'required',
            'body' => 'required',
        ]);

        Contact::create($validatedData);

        return redirect()->to('/product');
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
