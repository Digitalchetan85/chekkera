<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card my-4">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Project
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.projects')}}" class="btn btn-sm btn-primary text-white float-end">All
                                    Projects</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='addproject' enctype="multipart/form-data">
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Name :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='name' wire:keyup='generateSlug'>
                                    @error('name') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Slug :</label>
                                <div class="col-md-4 align-self-center">
                                    <input type="text" class="form-control" wire:model='slug'>
                                    @error('slug') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Project :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='project' class="form-control">
                                        <option value="">Select</option>
                                        <option value="Prestige">Prestige</option>
                                        <option value="Total-Environment">Total Environment</option>
                                    </select>
                                    @error('project') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Property :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='property' class="form-control">
                                        <option value="">Select</option>
                                        <option value="Buy">Buy</option>
                                        <option value="Sell">Sell</option>
                                        <option value="JD">JD</option>
                                        <option value="Rent">Rent</option>
                                    </select>
                                    @error('property') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Category :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='category' class="form-control">
                                        <option value="">Select</option>
                                        <option value="Residential">Residential</option>
                                        <option value="Commercial">Commercial</option>
                                        <option value="JD">JD</option>
                                        <option value="Rental">Rental</option>
                                    </select>
                                    @error('category') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Property Type :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='type' class="form-control">
                                        <option value="">Select</option>
                                        <option value="House">House</option>
                                        <option value="Flat">Flat</option>
                                        <option value="Villa">Villa</option>
                                        <option value="How-house">Row House</option>
                                        <option value="Site">Site</option>
                                        <option value="Land">Land</option>
                                        <option value="Commercial-space">Commercial Space</option>
                                    </select>
                                    @error('type') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Location :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='location'>
                                    @error('location') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">City :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='city'>
                                    @error('city') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Project Image :</label>
                                <div class="col-md-4">
                                    <input type="file" class="form-control align-self-center" wire:model='image'>
                                    @if($image)
                                    <img src="{{$image->temporaryUrl()}}" alt="" class="mt-2">
                                    @endif
                                    @error('image') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Project Images:</label>
                                <div class="col-md-4 align-self-center">
                                    <input type="file" class="form-control" wire:model='images' multiple>
                                    @if($images)
                                        @foreach($images as $image)
                                            <img src="{{$image->temporaryUrl()}}" width="60" alt="" class="mt-2">
                                        @endforeach
                                    @endif
                                    @error('images') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Bedroom :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='bedroom' class="form-control">
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    @error('bedroom') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Bathroom :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='bathroom' class="form-control">
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    @error('bathroom') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">More Info :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='info'>
                                    @error('info') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Price :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='price'>
                                    @error('price') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Land-Area :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='land'>
                                    @error('land') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">BuiltUp Area :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='builtup'>
                                    @error('builtup') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Floor Area :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='floor'>
                                    @error('floor') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Car Parking :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='parking' class="form-control">
                                        <option value="">Select</option>
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    @error('parking') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Features :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='feature' class="form-control">
                                        <option value="">Select</option>
                                        <option value="fully-furnished">Fully Furnished</option>
                                        <option value="semi-furnished">Semi Furnished</option>
                                        <option value="un-furnished">Un Furnished</option>
                                    </select>
                                    @error('feature') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Amenities :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='amenities'>
                                    @error('amenities') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                             <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center">Description :</label>
                                <div class="col-md-4">
                                    <textarea id="description" type="text" class="form-control align-self-center" wire:model='description' rows="5"></textarea>
                                    @error('description') <small class="text-primary">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center"></label>
                                <div class="col-md-4">
                                    @if (Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row mb-2">
                                <label for="" class="col-md-4 text-end align-self-center"></label>
                                <div class="col-md-4">
                                    <button class="btn-sm text-uppercase btn-dark rounded" type="submit">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>