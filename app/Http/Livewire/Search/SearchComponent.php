<?php

namespace App\Http\Livewire\Search;

use App\Models\Project;
use Livewire\Component;

class SearchComponent extends Component
{
    public $search;
    public $pagesize;

    public function mount() {
        $this->pagesize = 10;
        $this->fill(request()->only('search'));
    }
    public function render()
    {
        $projects = Project::where('name','like','%'.$this->search.'%')->paginate($this->pagesize);
        return view('livewire.search.search-component', compact('projects'))->layout('layouts.base');
    }
}
