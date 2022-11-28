<?php

namespace App\Http\Livewire\Contact;

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactComponent extends Component
{
    public $name;
    public $email;
    public $phone;
    public $subject;
    public $message;

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);
    }

    public function SaveData()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'subject' => 'required',
            'message' => 'required',
        ]);

        session()->flash('success', "Thanks for contacting us.");

        Mail::to('chetankumar.nv@gmail.com')->send(new ContactMail($data));
    }

    public function render()
    {
        return view('livewire.contact.contact-component')->layout('layouts.base');
    }
}
