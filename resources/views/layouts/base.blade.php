<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chekkera Properties</title>

    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @livewireStyles
</head>

<body>

    <div id="TopHeader" class="bg-primary text-white py-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-12 align-self-center">
                    <div class="text-center text-md-start py-1">
                        <a href="#" class="text-decoration-none text-white"><i class="fa fa-envelope"></i>
                            prasad@chekkeraproperties.com</a>
                    </div>
                </div>
                <div class="col-md-4 col-12 align-self-center position-relatiove">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-sm btn-white" type="submit"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                </div>
                <div class="col-md-2 col-6 align-self-center">
                    <div class="">
                        <a href="{{ route('about') }}" class="text-white text-decoration-none px-2"><small>About
                                Us</small></a>
                        <a href="" class="text-white text-decoration-none px-2"><small>Careers</small></a>
                    </div>
                </div>
                <div class="col-md-2 col-6 align-self-center">
                    <div class="text-end">
                        <div class="">
                            <a href="#" class="text-white"><i class="fa-brands fa-square-facebook rounded"></i></a>
                            <a href="#" class="text-white"><i class="fa-brands fa-linkedin rounded"></i></a>
                            <a href="#" class="text-white"><i class="fa-brands fa-square-twitter rounded"></i></a>
                            <a href="#" class="text-white"><i class="fa-brands fa-square-instagram rounded"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-light sticky-top shadow-sm" id="NavBar">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="{{ asset('assets/images/logo.png') }}" alt=""
                    class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Properties
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('buy')}}">Buy</a></li>
                            <li><a class="dropdown-item" href="{{ route('sell')}}">Sell</a></li>
                            <li><a class="dropdown-item" href="{{ route('rent') }}">Rent</a></li>
                            <li><a class="dropdown-item" href="{{ route('jd') }}">JD</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Projects
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('buy')}}">Prestige</a></li>
                        </ul>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ Request::is('buy') ? 'active' : '' }}" href="{{ route('buy')}}">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('sell') ? 'active' : '' }}" href="{{ route('sell')}}">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('rent') ? 'active' : '' }}"
                            href="{{ route('rent') }}">Rent</a>
                    </li> --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link {{ Request::is('jd') ? 'active' : '' }}" href="{{ route('jd') }}">Blogs</a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link"
                            href="#">Blogs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}"
                            href="{{ route('contact') }}">Contact Us</a>
                    </li>
                    @if(Route::has('login'))
                    @auth
                    @if(Auth::user()->utype === 'ADM')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('admin.dashboard')}}">Admin Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{route('admin.projects')}}">All Projects</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            My Account {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('user.dashboard')}}">User Dashboard</a></li>
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @endif
                    @else
                    <li class="{{ Request::is('login') ? 'active' : '' }} d-none"><a href="{{route('login')}}">Login</a>
                    </li>
                    <li class="{{ Request::is('register') ? 'active' : '' }} d-none"><a
                            href="{{route('register')}}">Register</a></li>
                    @endif
                    @endif
                </ul>
                <div class="text-center text-md-end">
                    <a href="#" class="text-primary fw-bold fs-5 text-decoration-none"><i
                            class="fa fa-phone-volume"></i> +91 76191 48458</a><br />
                    <a href="#" class="text-primary fw-bold fs-5 text-decoration-none"><i
                            class="fa fa-phone-volume"></i> +91 76191 48458</a>
                </div>
            </div>
        </div>
    </nav>




    {{ $slot }}

    <div id="footer" class="py-3 py-md-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="text-white">
                        <h3>About Us</h3>
                        <p>Chekkera Properties is a RERA registered Real Estate company established in the year 2017.
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="text-white">
                        <h3>Contact Us</h3>
                        <div class="text-white">
                            <ul class="list-unstyled">
                                <li class="py-1"><i class="fa-solid fa-location-dot"></i> VG-013, First Floor, Pruksa
                                    Silvana, Budigere Cross, Old Madras Road Bengaluru, Karnataka 560049</li>
                                <li class="pt-2"><i class="fa-solid fa-phone-volume"></i><a href="tel:09606267947"
                                        class="text-decoration-none text-white"> +91 80 4850 5759</a>
                                </li>
                                <li><i class="fa-solid fa-envelope"></i><a href="mailto:prasad@chekkeraproperties.com"
                                        class="text-decoration-none text-white">
                                        prasad@chekkeraproperties.com</a>
                                </li>
                                <li><i class="fa-solid fa-envelope"></i><a href="mailto:chekkerafrontline@gmail.com"
                                        class="text-decoration-none text-white">
                                        chekkerafrontline@gmail.com</a>
                                </li>
                                <li><i class="fa-brands fa-whatsapp"></i><a href="#"
                                        class="text-decoration-none text-white"> +91 99865 07655 / +91 96067 65596</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="">
                        <h3 class="text-white">Follow Us Social</h3>
                        <div class="pt-2">
                            <a href="#" class=""><i
                                    class="fa-brands fa-square-facebook fs-2 px-2 text-white rounded"></i></a>
                            <a href="#" class=""><i class="fa-brands fa-linkedin fs-2 px-2 text-white rounded"></i></a>
                            <a href="#" class=""><i
                                    class="fa-brands fa-square-twitter fs-2 px-2 text-white rounded"></i></a>
                            <a href="#" class=""><i
                                    class="fa-brands fa-square-instagram fs-2 px-2 text-white rounded"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer-end" class="py-3 py-md-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center">
                        <p class="mb-0">Copyright © XXXX 2022
                            All Right Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"
        integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/js/all.min.js"
        integrity="sha512-naukR7I+Nk6gp7p5TMA4ycgfxaZBJ7MO5iC3Fp6ySQyKFHOGfpkSZkYVWV5R7u7cfAicxanwYQ5D1e17EfJcMA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <script src="{{ asset('assets/js/main.js') }}"></script>

    @livewireScripts
</body>

</html>