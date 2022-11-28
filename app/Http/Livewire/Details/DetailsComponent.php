<?php

namespace App\Http\Livewire\Details;

use App\Mail\Detailsmail;
use App\Models\Project;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $project_id;
    public $project_slug;
    public $name;
    public $phone;
    public $email;
    public $buyer;
    public $message;

    public function mount($project_slug)
    {
        $slug = Project::where('slug', $project_slug)->first();
        $this->project_id = $slug->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'buyer' => 'required',
            'message' => 'required',
        ]);
    }

    public function SaveData()
    {
        $data = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'buyer' => 'required',
            'message' => 'required',
        ]);

        session()->flash('success', "Thanks for Requesting us.");

        Mail::to('chetankumar.nv@gmail.com')->send(new Detailsmail($data));
    }

   

    public function render()
    {
        $project = Project::where('id', $this->project_id)->first();
        $oprojects = Project::get()->take(8);
        return view('livewire.details.details-component', compact('project','oprojects'))->layout('layouts.base');
    }
}
