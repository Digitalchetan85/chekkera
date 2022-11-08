<?php

namespace App\Http\Livewire\Details;

use App\Models\Project;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $project_id;

    public function mount($project_id)
    {
        $this->project_id = $project_id;
    }

    public function render()
    {
        $project = Project::where('id', $this->project_id)->first();
        return view('livewire.details.details-component', compact('project'))->layout('layouts.base');
    }
}
