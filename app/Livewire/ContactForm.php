<?php

namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $message;
    public $services;
    public $phone;
    public function save()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'services' => 'required',
            'message' => 'required',
        ]);
        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'services' => $this->services,
            'message' => $this->message,
        ]);
    }
    public function render()
    {
        return view('livewire.contact-form');
    }
}
