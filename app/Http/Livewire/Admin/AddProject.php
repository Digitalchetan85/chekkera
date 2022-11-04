<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProject extends Component
{
    use WithFileUploads;
    public $name;
    public $property;
    public $category;
    public $type;
    public $location;
    public $image;
    public $images;
    public $bedroom;
    public $bathrooms;
    public $minfo;
    public $price;
    public $land;
    public $builtup;
    public $floor;
    public $parking;
    public $feature;
    public $amenities;
    public $description;

    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'name' => 'required',
            'property' => 'required',
            'category' => 'required',
            'type' => 'required',
            'location' => 'required',
            'image' => 'required',
            'images' => 'required',
            'bedroom' => 'required',
            'bathrooms' => 'required',
            'minfo' => 'required',
            'price' => 'required',
            'land' => 'required',
            'builtup' => 'required',
            'floor' => 'required',
            'parking' => 'required',
            'feature' => 'required',
            'amenities' => 'required',
            'description' => 'required',
        ]);
    }

    public function addproject(){
        $this->validate([
           'name' => 'required',
            'property' => 'required',
            'category' => 'required',
            'type' => 'required',
            'location' => 'required',
            'image' => 'required',
            'images' => 'required',
            'bedroom' => 'required',
            'bathrooms' => 'required',
            'minfo' => 'required',
            'price' => 'required',
            'land' => 'required',
            'builtup' => 'required',
            'floor' => 'required',
            'parking' => 'required',
            'feature' => 'required',
            'amenities' => 'required',
            'description' => 'required',
        ]);
            $project = new Projects();
            $project->name = $this->name;
            $project->property = $this->property;
            $project->category = $this->category;
            $project->type = $this->type;
            $project->location = $this->location;
            $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
            $this->image->storeAs('projects', $imagename);
            $project->image = $imagename;

            if ($this->images)
            {
                $imagename = '';
                foreach($this->images as $key =>$image){
                    $imgName = Carbon::now()->timestamp. $key.'.' . $image->extension();
                    $image->storeAs('projects',$imgName);
                    $imagename = $imagename.','.$imgName;
                }
                $project->images = $imagename;
            }
            $project->bedroom = $this->bedroom;
            $project->bathroom = $this->bathroom;
            $project->minfo = $this->minfo;
            $project->price = $this->price;
            $project->land = $this->land;
            $project->builtup = $this->builtup;
            $project->floor = $this->floor;
            $project->parking = $this->parking;
            $project->feature = $this->feature;
            $project->amenities = $this->amenities;
            $project->description = $this->description;
            $project->save();

            session()->flash('success', 'Project has been added successfully');
    }
     
    public function render()
    {
        return view('livewire.admin.add-project')->layout('layouts.base');
    }
}
