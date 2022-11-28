<div>
    <div id="banner" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active bg-primary"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="1" aria-label="Slide 2"></button>
            {{-- <button type="button" data-bs-target="#banner" data-bs-slide-to="2" aria-label="Slide 3"></button> --}}
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('assets/images/banner-1.png') }}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{ asset('assets/images/banner.png') }}" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <div id="PropertyListing" class="py-3 py-md-5">
        <div class="container">
            <div class="">
                <h2 class="text-primary fw-semibold">Our Property Listing</h2>
                <div class="line rounded"></div>
            </div>
            <div class="text-end">
                <a href="#" class="text-decoration-none text-primary">See All Properties <i
                        class="fa fa-arrow-right"></i></a>
            </div>
            <div class="row g-3 pt-3">
                @foreach($projects as $project)
                    <div class="col-md-3">
                        <div class="bg-white shadow-sm rounded border border-primary">
                            <div class="text-center">
                                <img src="{{ asset('assets/images/projects') }}/{{ $project->image }}" alt="" class="img-fluid rounded">
                            </div>
                            <div class="p-2">
                                <h6 class="">{{ $project->type }}</h6>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="">
                                            <h6 class="">{{ $project->location }}</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-6 col-md-7">
                                        <div class="border-end border-2 border-primary">
                                            <h5 class="text-primary">₹ {{ $project->price }}*</h5>
                                        </div>
                                    </div>
                                    <div class="col-6 col-md-5">
                                        <div class="">
                                            <h5 class="text-primary">{{ $project->builtuparea }} Sqft</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="">
                                    <p class="">{{ $project->description }}</p>
                                </div>
                                <div class="">
                                    <a href="{{ route('project.details', ['project_slug' => $project->slug]) }}" class="btn btn-sm btn-primary rounded-pill">More Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    @livewire('includes.common-form')

    <div id="ChannelPartner" class="py-3 py-md-5">
        <div class="container">
            <div class="">
                <h2 class="text-primary fw-semibold text-center">Channel Partner With</h2>
                <div class="line rounded"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="">
                                    <img src="{{ asset('assets/images/client-1.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <img src="{{ asset('assets/images/client-2.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <img src="{{ asset('assets/images/client-3.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <img src="{{ asset('assets/images/client-4.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                            <div class="item">
                                <div class="">
                                    <img src="{{ asset('assets/images/client-5.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <div id="Blogs" class="py-3 py-md-5">
        <div class="container bg-light p-5">
            <div class="">
                <h2 class="text-primary fw-semibold p-2 border-5 border-start border-secondary m-3">Popular Blogs</h2>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="bg-white">
                        <img src="{{ asset('assets/images/blog-1.png') }}" alt="" class="img-fluid">
                        <div class="">
                            <h4 class="text-primary pt-2 p-2">Effectively categorize</h4>
                            <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quaerat
                                iste, laborum accusantium quasi exercitationem aperiam at possimus similique, delectus
                                voluptatem quibusdam rerum ut, quo modi in fugit quidem beatae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white">
                        <img src="{{ asset('assets/images/blog-2.png') }}" alt="" class="img-fluid">
                        <div class="">
                            <h4 class="text-primary pt-2 p-2">Effectively categorize</h4>
                            <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quaerat
                                iste, laborum accusantium quasi exercitationem aperiam at possimus similique, delectus
                                voluptatem quibusdam rerum ut, quo modi in fugit quidem beatae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white">
                        <img src="{{ asset('assets/images/blog-3.png') }}" alt="" class="img-fluid">
                        <div class="">
                            <h4 class="text-primary pt-2 p-2">Effectively categorize</h4>
                            <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quaerat
                                iste, laborum accusantium quasi exercitationem aperiam at possimus similique, delectus
                                voluptatem quibusdam rerum ut, quo modi in fugit quidem beatae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="bg-white">
                        <img src="{{ asset('assets/images/blog-4.png') }}" alt="" class="img-fluid">
                        <div class="">
                            <h4 class="text-primary pt-2 p-2">Effectively categorize</h4>
                            <p class="p-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quaerat
                                iste, laborum accusantium quasi exercitationem aperiam at possimus similique, delectus
                                voluptatem quibusdam rerum ut, quo modi in fugit quidem beatae.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="WhatOur" class="py-3 py-md-5">
        <div class="container">
            <div class="pb-3">
                <h2 class="text-primary fw-semibold text-center">What Our Clients Say about us</h2>
                <div class="line rounded"></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="text-center bg-white shadow p-2">
                        <i class="fa-solid fa-quote-left text-warning fs-3"></i>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis at
                            deleniti molestias. Unde omnis eligendi voluptatem? Sit corporis illo laboriosam et,
                            deleniti quos aliquam qui, architecto amet, similique distinctio fugit.</p>
                        <img src="{{ asset('assets/images/group-175.png') }}" alt=""
                            class="img-fluid border border-dark p-1 rounded-circle">
                        <p class="text-center">lorem</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center bg-white shadow p-2">
                        <i class="fa-solid fa-quote-left text-warning fs-3"></i>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis at
                            deleniti molestias. Unde omnis eligendi voluptatem? Sit corporis illo laboriosam et,
                            deleniti quos aliquam qui, architecto amet, similique distinctio fugit.</p>
                        <img src="{{ asset('assets/images/group-175.png') }}" alt=""
                            class="img-fluid border border-dark p-1 rounded-circle">
                        <p class="text-center">lorem</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-center bg-white shadow p-2">
                        <i class="fa-solid fa-quote-left text-warning fs-3"></i>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Officiis at
                            deleniti molestias. Unde omnis eligendi voluptatem? Sit corporis illo laboriosam et,
                            deleniti quos aliquam qui, architecto amet, similique distinctio fugit.</p>
                        <img src="{{ asset('assets/images/group-175.png') }}" alt=""
                            class="img-fluid border border-dark p-1 rounded-circle">
                        <p class="text-center">lorem</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>