<?php

namespace App\Http\Livewire\Buy;

use App\Models\Project;
use Livewire\Component;

class BuyComponent extends Component
{
    public function render()
    {
        $projects = Project::where('property', 'buy')->get();
        return view('livewire.buy.buy-component', compact('projects'))->layout('layouts.base');
    }
}
