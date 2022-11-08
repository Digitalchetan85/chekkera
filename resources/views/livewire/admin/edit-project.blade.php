<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Projects
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.projects')}}" class="btn-sm btn-dark float-right">All
                                    Projects</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent='updateProject' enctype="multipart/form-data">
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Name :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='name'>
                                    @error('name') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Property :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='property' class="form-control">
                                        <option value="">Select</option>
                                        <option value="buy">Buy</option>
                                        <option value="sell">Sell</option>
                                        <option value="jd">JD</option>
                                        <option value="rent">Rent</option>
                                    </select>
                                    @error('property') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Category :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='category' class="form-control">
                                        <option value="">Select</option>
                                        <option value="residential">Residential</option>
                                        <option value="commercial">Commercial</option>
                                        <option value="jd">JD</option>
                                        <option value="rental">Rental</option>
                                    </select>
                                    @error('category') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Property Type :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='type' class="form-control">
                                        <option value="">Select</option>
                                        <option value="house">House</option>
                                        <option value="flat">Flat</option>
                                        <option value="villa">Villa</option>
                                        <option value="row-house">Row House</option>
                                        <option value="site">Site</option>
                                        <option value="land">Land</option>
                                        <option value="commercial-space">Commercial Space</option>
                                    </select>
                                    @error('type') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Location :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='location'>
                                    @error('location') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Image :</label>
                                <div class="col-md-4 align-self-center">
                                    <input type="file" class="form-control" wire:model='newimage'>
                                    @if($newimage)
                                        <img src="{{$newimage->temporaryUrl()}}" width="120" alt="" class="mt-2">
                                    @else
                                        <img src="{{asset('assets/images/projects')}}/{{ $image }}" width="120" alt="" class="mt-2">
                                    @endif
                                    @error('newimage') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Images :</label>
                                <div class="col-md-4 align-self-center">
                                    <input type="file" class="form-control" wire:model='newimages' multiple="multiple">
                                    @if($newimages)
                                        @foreach($newimages as $image)
                                            @if($image)
                                                <img src="{{$image->temporaryUrl()}}" width="120" alt="" class="mt-2">
                                            @endif
                                        @endforeach
                                    @else
                                        @foreach($images as $image)
                                            @if($image)
                                                <img src="{{asset('assets/images/projects')}}/{{ $image }}" width="120" alt="" class="mt-2">
                                            @endif
                                        @endforeach
                                    @endif
                                    @error('newimages') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Bedroom :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='bedroom' class="form-control">
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    @error('bedroom') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Bathroom :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='bathroom' class="form-control">
                                        <option value="">Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                    @error('bathroom') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">More Info :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='info'>
                                    @error('info') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Price :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='price'>
                                    @error('price') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Land-Area :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='landarea'>
                                    @error('landarea') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">BuiltUp Area :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='builtuparea'>
                                    @error('builtuparea') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Floor Area :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='floorarea'>
                                    @error('floorarea') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Car Parking :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='parking' class="form-control">
                                        <option value="">Select</option>
                                        <option value="no">No</option>
                                        <option value="yes">Yes</option>
                                    </select>
                                    @error('parking') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Features :</label>
                                <div class="col-md-4">
                                    <select id="" wire:model='feature' class="form-control">
                                        <option value="">Select</option>
                                        <option value="fully-furnished">Fully Furnished</option>
                                        <option value="semi-furnished">Semi Furnished</option>
                                        <option value="un-furnished">Un Furnished</option>
                                    </select>
                                    @error('feature') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Amenities :</label>
                                <div class="col-md-4">
                                    <input type="text" class="form-control align-self-center" wire:model='amenities'>
                                    @error('amenities') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                             <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center">Description :</label>
                                <div class="col-md-4">
                                    <textarea id="description" type="text" class="form-control align-self-center" wire:model='description' rows="5"></textarea>
                                    @error('description') <small class="text-danger">{{$message}}</small> @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center"></label>
                                <div class="col-md-4">
                                    @if (Session::has('success'))
                                    <div class="alert alert-success">{{Session::get('success')}}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 text-right align-self-center"></label>
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