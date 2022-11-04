<div>
    <style>
        nav {
            text-align: center !important;
        }

        nav svg {
            height: 10px !important;
        }

        nav .hidden {
            display: block !important;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                Projects
                            </div>
                            <div class="col-md-6">
                                <a href="{{route('admin.addprojects')}}" class="btn-sm btn-dark float-right">
                                    Add New Projects
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        <div class="table-responsive">
                            <table class="table table-hovered table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Property</th>
                                        <th>Property Category</th>
                                        <th>Property Type</th>
                                        <th>Location</th>
                                        <th>Image</th>
                                        <th>Images</th>
                                        <th>Bedroom</th>
                                        <th>Bathroom</th>
                                        <th>More Info</th>
                                        <th>Price</th>
                                        <th>Land Area</th>
                                        <th>Built-Up Area</th>
                                        <th>Floor Area</th>
                                        <th>Car Parking</th>
                                        <th>Features</th>
                                        <th>Amenities</th>
                                        <th>Description</th>
                                        <th>Action</th>  
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($projects as $project)
                                    <tr>
                                        <td>{{$project->id}}</td>
                                        <td>{{$project->name}}</td>
                                        <td>{{$project->property}}</td>
                                        <td>{{$project->category}}</td>
                                        <td>{{$project->type}}</td>
                                        <td>{{$project->location}}</td>

                                        <td><img src="{{asset('assets/images/fp-products')}}/{{$project->image}}"
                                                width="60" /></td>
                                                <td><img src="{{asset('assets/images/fp-products')}}/{{$project->images}}"
                                                    width="60" /></td>
                                        <td>{{$project->bedroom}}</td>
                                        <td>{{$project->bathrooms}}</td>
                                        <td>{{$project->more-info}}</td>
                                        <td>{{$project->price}}</td>
                                        <td>{{$project->land-area}}</td>
                                        <td>{{$project->builtup-area}}</td>
                                        <td>{{$project->floor-area}}</td>
                                        <td>{{$project->carparking}}</td>
                                        <td>{{$project->feature}}</td>
                                        <td>{{$project->amenities}}</td>
                                        <td>{{$project->description}}</td>
                                        <td>{{$project->created_at}}</td>
                                        <td>{{$project->updated_at}}</td>
                                        
                                        <td>
                                            <div class="">
                                                <a href="{{route('admin.editproduct',['project_id=>$project->id'])}}"><i
                                                        class="fa fa-edit"></i></a>
                                                <a href = 
    
                                                <!-- Button trigger modal -->
                                                <a href="#" class="bg-transperant border-0 ml-2" data-toggle="modal"
                                                    data-target="#exampleModal">
                                                    <i class="fa fa-trash text-danger"></i>
                                                </a>
    
                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                Are you sure you want to delete this category.
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">No</button>
                                                                <button type="button" class="btn btn-primary"
                                                                    wire:click.prevent='deleteProduct({{$product->id}})'
                                                                    data-dismiss="modal">Yes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
    
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card-footer">
                        {{$products->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
