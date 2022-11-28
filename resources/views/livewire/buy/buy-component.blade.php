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
    </div>

    <div id="Appartment" class="">
        @foreach($projects as $project)
        <div class="container mb-2 bg-body rounded custom-hover">
            <div class="row">
                <div class="col-md-9">
                    <div class="py-3">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="">
                                    <img src="{{ asset('assets/images/projects') }}/{{ $project->image }}" alt="" class="img-fluid">
                                    <p class="fs-3 pt-3 text-center">{{ $project->category }}</p>
                                </div>
                            </div>

                            <div class="col-md-8">
                                <p class="fs-3 mb-0">{{ $project->type }}</p>
                                {{-- <p class="mb-0">{{ $project->location }}</p> --}}
                                <div class="bg-light rounded my-2 p-3 shadow">
                                    <div class="row">
                                        <div class="col-md-6 col-6">
                                            <div class="border-0 border-dark border-end">
                                                <div class="row">
                                                    <div class="col-md-2 col-2">
                                                        <div class="text-center">
                                                            <img src="{{ asset('assets/images/area.png') }}"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10 col-10 align-self-center">
                                                        <div class="">
                                                            <span class="fw-bold">Area:</span>
                                                            <span>{{ $project->landarea }} sqft</span>
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
                                                            <img src="{{ asset('assets/images/building.png') }}"
                                                                alt="" class="img-fluid">
                                                        </div>
                                                    </div>
                                                    {{-- <div class="col-md-10 col-10">
                                                        <div class="">
                                                            <span class="fw-bold">BHK:</span>
                                                            <span>{{ $project->bedroom }}</span>
                                                        </div>
                                                    </div> --}}
                                                    <div class="col-md-12 col-12 align-self-center">
                                                        <p class="mb-0">{{ $project->location }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="pt-3">
                                            <p class="">{{ $project->moreinfo }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="py-2">
                                    <p>{{ $project->description }} <a href="{{ route('project.details', ['project_slug' => $project->slug]) }}">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 bg-light">
                    <div class="bg-light py-4 text-center my-4">
                        <h3 class="text-primary fw-semibold">₹ {{ $project->price }}*</h3>
                        {{-- <p class="text-primary">{{ $project->builtuparea }} sqft</p> --}}
                        <p class="text-primary">{{ $project->city }}</p>
                       <a href="{{ route('contact') }}"> <button class="btn btn-secondary rounded-pill text-white px-5">Contact Us</button><br /></a>
                        {{-- <button class="btn border border-secondary rounded-pill text-secondary px-5 my-3">Get Phone
                            No.</button><br /> --}}
                            <div class="social-icons mr-2 py-3">
                                <a href="#" class="social-icon social-facebook fab fa-facebook-f fs-4 px-1"
                                    target="_blank" title="Facebook" id="facebook"></a>
                                <a href="#" class="social-icon social-twitter fab fa-twitter fs-4 px-1" target="_blank"
                                    title="Twitter" id="twitter"></a>
                                <a href="#" class="social-icon social-linkedin fab fa-linkedin-in fs-4 px-1"
                                    target="_blank" title="Linkedin" id="linkedin"></a>
                                {{-- <a href="#" class="social-icon social-instagram fab fa-instagram"
                                    target="_blank" title="Instagram" id="instagram"></a> --}}
                                <a href="#" class="social-icon social-whatsapp fab fa-whatsapp fs-4 px-1"
                                    target="_blank" title="whatsapp" id="whatsapp"></a>
                            </div><!-- End .social-icons -->
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

{{-- @push('scripts')
<script>
    const fb = document.getElementById('facebook');
    const tw = document.getElementById('twitter');
    const ln = document.getElementById('linkedin');
    // const ins = document.getElementById('instagram');
    const wa = document.getElementById('whatsapp');

    let url = encodeURI(document.location.href);
    let title = encodeURI('{{ $project->name }}');

    // alert('{{ $project->name }}');

    fb.setAttribute('href',`https://www.facebook.com/sharer.php?u=${url}`);
    tw.setAttribute('href', `https://www.twitter.com/share?url=${url}&text=${title}`);
    ln.setAttribute('href', `https://www.linkedin.com/shareArticle?url=${url}&text=${title}`);
    // ins.setAttribute('href', `https://www.instagram.com/share?url=${url}&text=${title}`);
    wa.setAttribute('href', `https://wa.me/?text=${url}`);
</script>
@endpush --}}