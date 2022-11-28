<?php

namespace App\Http\Livewire\Includes;

use App\Mail\CommonForm as MailCommonForm;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class CommonForm extends Component
{ 
    public $name;
    public $company;
    public $email;
    public $location;
    public $phone;
    public $address;
    public $city;
    public $pincode;
    public $message;

    public function updated ($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'pincode' => 'required',
            'message' => 'required',
            
        ]);
    }

    public function SaveData()
    {
        $data = $this->validate([
            'name' => 'required',
            'company' => 'required',
            'email' => 'required|email',
            'location' => 'required',
            'phone' => 'required|numeric',
            'address' => 'required',
            'city' => 'required',
            'pincode' => 'required',
            'message' => 'required',
        ]);
        
        session()->flash('success', "Thanks for contacting us.");
        
        Mail::to('chetankumar.nv@gmail.com')->send(new MailCommonForm($data));
    }
    public function render()
    {
        return view('livewire.includes.common-form');
    }
}
