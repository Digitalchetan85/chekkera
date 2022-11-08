<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddProject extends Component
{
    use WithFileUploads;
    public $name;
    public $project;
    public $property;
    public $category;
    public $type;
    public $location;
    public $city;
    public $image;
    public $images;
    public $bedroom;
    public $bathroom;
    public $info;
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
            'project' => 'required',
            'property' => 'required',
            'category' => 'required',
            'type' => 'required',
            'location' => 'required',
            'city' => 'required',
            'image' => 'required',
            'images' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'info' => 'required',
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
           'project' => 'required',
            'property' => 'required',
            'category' => 'required',
            'type' => 'required',
            'location' => 'required',
            'city' => 'required',
            'image' => 'required',
            'images' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'info' => 'required',
            'price' => 'required',
            'land' => 'required',
            'builtup' => 'required',
            'floor' => 'required',
            'parking' => 'required',
            'feature' => 'required',
            'amenities' => 'required',
            'description' => 'required',
        ]);
            $project = new Project();
            $project->name = $this->name;
            $project->project = $this->project;
            $project->property = $this->property;
            $project->category = $this->category;
            $project->type = $this->type;
            $project->location = $this->location;
            $project->city = $this->city;
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
            $project->bathrooms = $this->bathroom;
            $project->moreinfo = $this->info;
            $project->price = $this->price;
            $project->landarea = $this->land;
            $project->builtuparea = $this->builtup;
            $project->floorarea = $this->floor;
            $project->carparking = $this->parking;
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
