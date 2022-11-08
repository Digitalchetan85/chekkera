<div>
    <div id="banner">
        <img src="{{ asset('assets/images/buy-banner.png') }}" alt="" class="img-fluid">
    </div>
    <div id="BuyProperties" class="py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <h2 class="text-primary fw-semibold">Buy Properties</h2>
                        <div class="line rounded"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 fs-4">
                    <div class="border border border-primary rounded py-2 px-5">
                        <p>Looking for a <span class="text-primary fw-semibold">ALL RESIDENTIAL,FI...in
                                Bangalore?</span> <a href="" class="text-secondary">Edit Requirement</a></p>
                        <p>Find Your right ALL RESIDENTIAL,FI...from 26947+ Properties</p>
                        <button class="btn border border-secondary rounded-pill text-secondary px-4">Set Alert</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="Properties py-3 py-md-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Properties (26,947)</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">New Projects</a>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="text-end">
                        <ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Sort by : Relevence
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div> --}}
                    <div class="py-md-4 text-primary fs-4">
                        <p>{{ $projects->count() }} results Property for Sale in Bangalore without brokerage</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Appartment" class="">
        @foreach($projects as $project)
        <div class="container shadow-sm mb-2 bg-body rounded">
            <div class="row">
                <div class="col-md-9">
                    <div class="py-5">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="">
                                    <img src="{{ asset('assets/images/projects') }}/{{ $project->image }}" alt="" class="img-fluid">
                                    <p class="fs-3 py-3 text-center">{{ $project->category }}</p>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <p class="fs-3">{{ $project->bedroom }}BHK {{ $project->type }}</p>
                                <a href="#">{{ $project->location }}</a>
                                <div class="my-2 bg-light rounded p-3 shadow">
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <div class="border-0 border-dark border-end">
                                                <div class="row">
                                                    <div class="col-md-2 col-2">
                                                        <div class="">
                                                            <img src="{{ asset('assets/images/contact/phone.png') }}"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-10">
                                                        <div class="">
                                                            <span class="fw-bold">Super Area:</span>
                                                            <span>{{ $project->builtuparea }} sqft</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-6">
                                            <div class="">
                                                <div class="row">
                                                    <div class="col-md-2 col-2">
                                                        <div class="">
                                                            <img src="{{ asset('assets/images/contact/phone.png') }}"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-10">
                                                        <div class="">
                                                            <span class="fw-bold">STATUS:</span>
                                                            <span>Ready To Move</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="py-2">
                                    <p>{{ $project->description }} <a href="#">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 bg-light">
                    <div class="bg-light py-4 text-center my-4">
                        <h3 class="text-primary fw-semibold">₹ {{ $project->price }} Cr</h3>
                        <p class="text-primary">₹ {{ $project->builtuparea }} per sqft</p>
                        <button class="btn btn-secondary rounded-pill text-white px-5">Contact Us</button><br />
                        <button class="btn border border-secondary rounded-pill text-secondary px-5 my-3">Get Phone
                            No.</button><br />
                        <a href="#" class="text-primary">Share Feedback</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    
    {{-- <div id="Button" class="my-2 my-md-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pt-5">
                        <button class="btn border border-secondary rounded-pill text-secondary fw-semibold px-5 fs-4">Load More</button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    @livewire('includes.common-form')
</div>