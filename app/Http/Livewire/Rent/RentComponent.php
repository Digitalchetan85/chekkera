<?php

namespace App\Http\Livewire\Rent;

use App\Models\Project;
use Livewire\Component;

class RentComponent extends Component
{
    public function render()
    {
        $projects = Project::where('property', 'rent')->get();
        $oprojects = Project::get()->take(8);
        return view('livewire.rent.rent-component', compact('projects','oprojects'))->layout('layouts.base');
    }
}
