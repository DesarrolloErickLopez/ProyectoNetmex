<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/sidebar.js') }}" defer></script>
    <link href="{{ asset('css/sidebar.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>    

    @guest
    <section class="welcome">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img class="img-icon" src="{{asset('img/icono/logo.jpg')}}" alt="Logo de HTML" width="75" height="50" />                
                <button class="btn btn-dark navbar-toggler" href="#offcanvasExample" rol="button" data-bs-toggle="offcanvas" aria-controls="offcanvasExample">
                <span class=""><i class="bi bi-list "></i></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif                     
                    </ul>
                </div> 
                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">NETMEX</h5>
                        <button type="button" class="btn btn-light btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif                         
                        </ul>    
                    </div>
                </div>
            </div>
        </nav>   
    </section>
    @else
    <section class="canva">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <img class="img-icon" src="{{asset('img/icono/logo.jpg')}}" alt="Logo de HTML" width="75" height="50" />
                <a class="navbar-brand px-3" href="#">NETMEX</a>                 
                <button class="btn btn-dark navbar-toggler" href="#offcanvasExample" rol="button" data-bs-toggle="offcanvas" aria-controls="offcanvasExample">
                <span class=""><i class="bi bi-list "></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="itemSideBar nav-link px-3" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="itemSideBar nav-link px-3" href="#">Popieties</a>
                        </li>
                        <li class="nav-item">
                            <a class="itemSideBar nav-link px-3" href="#">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="itemSideBar nav-link px-3" href="#">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="itemSideBar nav-link px-3" href="#">Contact</a>
                        </li>                        
                        <li class="nav-item dropdown px-3">
                            <a id="navbarDropdown" class="itemSideBar nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item bg-dark" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li> 
                    </ul>
                </div>                    

                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasExampleLabel">NETMEX</h5>
                        <button type="button" class="btn btn-light btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="itemSideBar nav-link px-3" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="itemSideBar nav-link px-3" href="#">Popieties</a>
                            </li>
                            <li class="nav-item">
                                <a class="itemSideBar nav-link px-3" href="#">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="itemSideBar nav-link px-3" href="#">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="itemSideBar nav-link px-3" href="#">Contact</a>
                            </li>
                            <li class="nav-item dropdown px-3">
                                <a id="navbarDropdown" class="itemSideBar nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item bg-dark" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>                         
                        </ul>    
                        <form class="d-flex">
                            <button class="btn btn-outline-success px-3" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </section>
    @endguest
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <main class="py-4">
            @yield('content')
    </main>
</body>
</html>
