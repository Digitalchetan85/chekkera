<?php

namespace App\Http\Livewire\Details;

use Livewire\Component;

class DetailsComponent extends Component
{
    public function render()
    {
        return view('livewire.details.details-component')->layout('layouts.base');
    }
}
