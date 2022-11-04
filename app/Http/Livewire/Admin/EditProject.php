<?php

namespace App\Http\Livewire\Admin;

use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditProject extends Component
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
    public $newimage;
    public $newimages;
    public $project_id;

    public function mount($project_id) {
        $project= Projects::where('id',$project_id)->first();
        $this->name = $project->name;
        $this->property = $project->property;
        $this->category = $project->category;
        $this->type = $project->type;
        $this->location = $project->location;
        $this->image = $project->image;
        $this->image = explode(',', $project->images);
        $this->bedroom = $project->bedroom;
        $this->bathrooms = $project->bathrooms;
        $this->minfo = $project->minfo;
        $this->price = $project->price;
        $this->land = $project->land;
        $this->builtup = $project->builtup;
        $this->floor = $project->floor;
        $this->parking = $project->parking;
        $this->feature = $project->feature;
        $this->amenities = $project->amenities;
        $this->description = $project->description;
        $this->project_id = $project->id;
    }

    public function updated($fields){
        $this->validateOnly($fields,[
            'name' => 'required',
            'property' => 'required',
            'category' => 'required',
            'type' => 'required',
            'location' => 'required',
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
        if($this->newimage)
        {
            $this->validateonly($fields,[
                'newimage' => 'required|mimes:jpeg,jpg,png',
            ]);
        }

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
        if($this->newimage)
        {
            $this->validateonly($fields,[
                'newimage' => 'required|mimes:jpeg,jpg,png',
            ]);
        }
            $project = Projects::find($this->project_id);
            $project->name = $this->name;
            $project->property = $this->property;
            $project->category = $this->category;
            $project->type = $this->type;
            $project->location = $this->location;

            if($this->newimage){
                unlink('asset/images/projects'.'/'.$project->image);
                $imagename = Carbon::now()->timestamp.'.'.$this->image->extension();
                $this->image->storeAs('projects', $imagename);
                $project->image = $imagename;
            }

            if($this->newimages)
            {
                if($project->images)
                {
                    $images = explode(',', $project->images);
                    foreach($images as $image)
                    {
                        if($image)
                        {
                            unlink('asseys/mages/projects'.'/'.$project->image);
                        }
                    }
                }
                $imagesname = '';
                foreach($this->newimages as $key=>$image)
                {
                    $imgname = Carbon::now()->timestamp.$key.'.'.$image->extension();
                    $image->storeAs('projects', $imgname);
                    $imagename = $imagesname.','.$imgname;
                }
                $project->images = $imagesname;
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
        return view('livewire.admin.edit-project')->layout('layouts.base');
    }
}
