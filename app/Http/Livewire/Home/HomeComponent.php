<?php

namespace App\Http\Livewire\Home;

use App\Models\Project;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        $projects = Project::all();
        return view('livewire.home.home-component', compact('projects'))->layout('layouts.base');
    }
}
