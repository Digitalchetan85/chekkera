<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Prestige extends Component
{
    public function render()
    {
        $projects = Project::where('project', 'prestige')->get();
        return view('livewire.projects.prestige', compact('projects'))->layout('layouts.base');
    }
}
