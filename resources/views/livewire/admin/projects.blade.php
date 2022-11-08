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
                            <table class="table ">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Property</th>
                                        <th>Category</th>
                                        <th>Type</th>
                                        <th>Location</th>
                                        <th>Image</th>
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
                                    @foreach($aprojects as $project)
                                    <tr>
                                        <td>{{$project->id}}</td>
                                        <td>{{$project->name}}</td>
                                        <td>{{$project->property}}</td>
                                        <td>{{$project->category}}</td>
                                        <td>{{$project->type}}</td>
                                        <td>{{$project->location}}</td>

                                        <td><img src="{{asset('assets/images/projects')}}/{{$project->image}}"
                                                width="60" /></td>
                                        <td>{{$project->bedroom}}</td>
                                        <td>{{$project->bathrooms}}</td>
                                        <td>{{$project->moreinfo}}</td>
                                        <td>{{$project->price}}</td>
                                        <td>{{$project->landarea}}</td>
                                        <td>{{$project->builtuparea}}</td>
                                        <td>{{$project->floorarea}}</td>
                                        <td>{{$project->carparking}}</td>
                                        <td>{{$project->feature}}</td>
                                        <td>{{$project->amenities}}</td>
                                        <td>{{$project->description}}</td>

                                        <td>
                                            <div class="">
                                                <a href="{{route('admin.editprojects',['project_id'=>$project->id])}}"><i
                                                        class="fa fa-edit"></i></a>

                                                <!-- Button trigger modal -->
                                                <button type="button" class="border-0 bg-transparent text-primary ml-2"
                                                    data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                    <i class="fa fa-trash"></i>
                                                </button>

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <div class="text-center">
                                                                    <h4 class="text-dark">Are you sure you want to
                                                                        delete this category?</h4>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer justify-content-center">
                                                                <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">no</button>
                                                                <button type="button" class="btn btn-primary"
                                                                    data-dismiss="modal"
                                                                    wire:click.prevent='deleteProject({{$project->id}})'>Yes</button>
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
                        {{$aprojects->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>