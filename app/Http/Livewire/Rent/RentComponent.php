<?php

namespace App\Http\Livewire\Rent;

use Livewire\Component;

class RentComponent extends Component
{
    public function render()
    {
        return view('livewire.rent.rent-component')->layout('layouts.base');
    }
}
