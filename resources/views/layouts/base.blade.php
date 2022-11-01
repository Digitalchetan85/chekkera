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

    <div id="TopHeader" class="bg-primary text-white p-1">
        <div class="container">
            <div class="row">
                <div class="col-md-4 align-self-center">
                    <div class="">
                        <a href="#" class="text-decoration-none text-white"><i class="fa fa-envelope"></i>
                            prasad@chekkeraproperties.com</a>
                    </div>
                </div>
                <div class="col-md-5 align-self-center">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-sm btn-white" type="submit">Search</button>
                    </form>
                </div>
                <div class="col-md-2 align-self-center">
                    <div class="">
                        <div class="">
                            <div class="">
                                <a href="" class="text-white text-decoration-none px-2"><small>About Us</small></a>
                                <a href="" class="text-white text-decoration-none px-2"><small>Careers</small></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1 align-self-center">
                    <div class="text-end">
                        <div class="">
                            <div class="">
                                <a href="" class="text-white"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="" class="text-white"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="" class="text-white"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="" class="text-white"><i class="fa-brands fa-square-facebook"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg bg-light sticky-top" id="NavBar">
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
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Rent</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">JD</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    @if(Route::has('login'))
                    @auth
                    @if(Auth::user()->utype === 'ADM')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            My Account {{Auth::user()->name}}
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-item"><a href="{{route('admin.dashboard')}}">Admin Dashboard</a></li>
                            <li class="dropdown-item"><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>
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
                            <li class="Dropdown-item"><a href="{{ route('user.dashboard')}}">User Dashboard</a></li>
                            <li class="Dropdown-item"><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                            </li>
                            <form id="logout-form" method="POST" action="{{ route('logout') }}" class="d-none">
                                @csrf
                            </form>
                        </ul>
                    </li>
                    @endif
                    @else
                    <li class="{{ Request::is('login') ? 'active' : '' }} d-none"><a href="{{route('login')}}">Login</a></li>
                    <li class="{{ Request::is('register') ? 'active' : '' }} d-none"><a
                            href="{{route('register')}}">Register</a></li>
                    @endif
                    @endif
                </ul>
                <div class="text-center text-md-end">
                    <a href="#" class="text-primary fw-bold fs-5 text-decoration-none"><i class="fa fa-phone-volume"></i> +91 76191 48458</a>
                </div>  
            </div>
        </div>
    </nav>


    {{ $slot }}

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

    @livewireScripts
</body>

</html>