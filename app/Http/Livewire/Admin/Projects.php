<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;
    public function render()
    {
        $aprojects = Project::paginate(10);
        // dd($aprojects);
        return view('livewire.admin.projects', compact('aprojects'))->layout('layouts.base');
    }
}
