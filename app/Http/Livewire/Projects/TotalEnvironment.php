<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class TotalEnvironment extends Component
{
    public function render()
    {
        $projects = Project::where('project', 'Total-Environment')->get();
        return view('livewire.projects.total-environment', compact('projects'))->layout('layouts.base');
    }
}
