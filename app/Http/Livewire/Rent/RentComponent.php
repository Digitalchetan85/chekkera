<?php

namespace App\Http\Livewire\Rent;

use App\Models\Project;
use Livewire\Component;

class RentComponent extends Component
{
    public function render()
    {
        $projects = Project::where('property', 'rent')->get();
        return view('livewire.rent.rent-component', compact('projects'))->layout('layouts.base');
    }
}
