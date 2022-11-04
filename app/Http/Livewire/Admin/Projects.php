<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;

class Projects extends Component
{
    use WithPagination;
    public function render()
    {
        $projects = Projects::all();
        return view('livewire.admin.projects', compact('projects'))->layout('layouts.base');
    }
}
