<?php

namespace App\Http\Livewire\Jd;

use App\Models\Project;
use Livewire\Component;

class JdComponent extends Component
{
    public function render()
    {
        $projects = Project::where('property', 'jd')->get();
        return view('livewire.jd.jd-component', compact('projects'))->layout('layouts.base');
    }
}
