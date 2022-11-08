<?php

namespace App\Http\Livewire\Sell;

use App\Models\Project;
use Livewire\Component;

class SellComponent extends Component
{
    public function render()
    {
        $projects = Project::where('property', 'sell')->get();
        return view('livewire.sell.sell-component', compact('projects'))->layout('layouts.base');
    }
}
