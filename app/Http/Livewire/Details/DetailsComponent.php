<?php

namespace App\Http\Livewire\Details;

use App\Models\Project;
use Livewire\Component;

class DetailsComponent extends Component
{
    public $project_id;
    public $project_slug;

    public function mount($project_slug)
    {
        $slug = Project::where('slug', $project_slug)->first();
        $this->project_id = $slug->id;
    }

    public function render()
    {
        $project = Project::where('id', $this->project_id)->first();
        return view('livewire.details.details-component', compact('project'))->layout('layouts.base');
    }
}
