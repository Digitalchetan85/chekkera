<?php

namespace App\Http\Livewire\Admin;

use App\Models\Project;
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
    public $bathroom;
    public $info;
    public $price;
    public $landarea;
    public $builtuparea;
    public $floorarea;
    public $parking;
    public $feature;
    public $amenities;
    public $description;
    public $newimage;
    public $newimages;
    public $project_id;

    public function mount($project_id)
    {
        $project = Project::where('id', $project_id)->first();
        $this->name = $project->name;
        $this->property = $project->property;
        $this->category = $project->category;
        $this->type = $project->type;
        $this->location = $project->location;
        $this->image = $project->image;
        $this->images = explode(',', $project->images);
        $this->bedroom = $project->bedroom;
        $this->bathroom = $project->bathrooms;
        $this->info = $project->moreinfo;
        $this->price = $project->price;
        $this->landarea = $project->landarea;
        $this->builtuparea = $project->builtuparea;
        $this->floorarea = $project->floorarea;
        $this->parking = $project->carparking;
        $this->feature = $project->feature;
        $this->amenities = $project->amenities;
        $this->description = $project->description;
        $this->project_id = $project->id;
    }

    public function updated($fields)
    {
        $this->validateOnly($fields, [
            'name' => 'required',
            'property' => 'required',
            'category' => 'required',
            'type' => 'required',
            'location' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'info' => 'required',
            'price' => 'required',
            'landarea' => 'required',
            'builtuparea' => 'required',
            'floorarea' => 'required',
            'parking' => 'required',
            'feature' => 'required',
            'amenities' => 'required',
            'description' => 'required',
        ]);
        if ($this->newimage) {
            $this->validateOnly($fields, [
                'newimage' => 'required|mimes:jpeg,jpg,png',
            ]);
        }
    }

    public function updateProject()
    {
        $this->validate([
            'name' => 'required',
            'property' => 'required',
            'category' => 'required',
            'type' => 'required',
            'location' => 'required',
            'bedroom' => 'required',
            'bathroom' => 'required',
            'info' => 'required',
            'price' => 'required',
            'landarea' => 'required',
            'builtuparea' => 'required',
            'floorarea' => 'required',
            'parking' => 'required',
            'feature' => 'required',
            'amenities' => 'required',
            'description' => 'required',
        ]);
        if ($this->newimage) {
            $this->validate([
                'newimage' => 'required|mimes:jpeg,jpg,png',
            ]);
        }
        $project = Project::find($this->project_id);
        // dd($project);
        $project->name = $this->name;
        $project->property = $this->property;
        $project->category = $this->category;
        $project->type = $this->type;
        $project->location = $this->location;

        if ($this->newimage) {
            unlink('asset/images/projects' . '/' . $project->image);
            $imagename = Carbon::now()->timestamp . '.' . $this->image->extension();
            $this->image->storeAs('projects', $imagename);
            $project->image = $imagename;
        }

        if ($this->newimages) {
            if ($project->images) {
                $images = explode(',', $project->images);
                foreach ($images as $image) {
                    if ($image) {
                        unlink('asseys/mages/projects' . '/' . $project->image);
                    }
                }
            }
            $imagesname = '';
            foreach ($this->newimages as $key => $image) {
                $imgname = Carbon::now()->timestamp . $key . '.' . $image->extension();
                $image->storeAs('projects', $imgname);
                $imagename = $imagesname . ',' . $imgname;
            }
            $project->images = $imagesname;
        }
        $project->bedroom = $this->bedroom;
        $project->bathrooms = $this->bathroom;
        $project->moreinfo = $this->info;
        $project->price = $this->price;
        $project->landarea = $this->landarea;
        $project->builtuparea = $this->builtuparea;
        $project->floorarea = $this->floorarea;
        $project->carparking = $this->parking;
        $project->feature = $this->feature;
        $project->amenities = $this->amenities;
        $project->description = $this->description;
        $project->save();

        session()->flash('success', 'Project has been Updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.edit-project')->layout('layouts.base');
    }
}
