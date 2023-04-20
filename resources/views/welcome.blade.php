@extends('layouts.sidebar')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" href="{{asset('img/favicon/favicon.png')}}">
        <title>NETMEX</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">        
        <link rel="stylesheet" type="text/css" href="{{asset('css/welcome-estilos.css')}}">
    </head>
@section('content')
    <div class="catalogo-muestra" >
        <div class="row row-cols-1 row-cols-lg-4 g-2 g-lg-3">
            <div class="col">
                <div id="carouselExampleIndicators" class="carousel slide d-block w-75" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/1.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/2.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/3.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col">
                <div id="carouselExampleIndicators2" class="carousel slide d-block w-75" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/4.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/5.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/6.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col">
                <div id="carouselExampleIndicators3" class="carousel slide d-block w-75" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/7.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/8.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/9.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col">
                <div id="carouselExampleIndicators4" class="carousel slide d-block w-75" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/10.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/11.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                        <div class="carousel-item">
                            <a  href="{{ route('login') }}">
                                <img src="{{asset('img/welcome-carrusel/12.jpg')}}" class="d-block w-100" alt="...">
                            </a>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="catalogo-muestra-2">
        <div class="container">
            <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">
                <div class="col">
                    <div class="card" style="width: 22rem;">
                        <img src="{{asset('img/welcome-imgs/cine.png')}}" class="card-img-top" alt="..." style="height: 30%;">
                        <div class="card-body">
                            <h5 class="card-title">Aprovecha nuestra promociones</h5>
                            <p class="card-text">Disfruta de nuestro amplio catalogo de contenido asi como las prommocines que NETMEX te brinda, no esperes mas y unete a esta gran comunidad cinefanatica.</p>
                            {{-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> --}}
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 22rem;">
                        <img src="{{asset('img/welcome-imgs/series.jpg')}}" class="card-img-top" alt="..." style="height: 30%;">
                        <div class="card-body">
                            <h5 class="card-title">Series</h5>
                            <p class="card-text">Podrás ver todo tipo de series desde donde quieras cuando quieras, nuestro catálogo de contenido te brindara miles de horas de entretenimiento.</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card" style="width: 22rem;">
                        <img src="{{asset('img/welcome-imgs/peliculas.jpg')}}" class="card-img-top" alt="..." style="height: 30%;">
                        <div class="card-body">
                            <h5 class="card-title">Peliculas</h5>
                            <p class="card-text">Podrás ver cientos de películas de todo tipo desde la comodidad, contenido de calidad tanto que no podrás creerlo.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    {{-- <section class="">
        <footer class="text-center text-white" style="background-color: #0a4275;">
            <div class="container p-4 pb-0">
            <section class="">
                <p class="d-flex justify-content-center align-items-center">
                <span class="me-3">Register for free</span>
                <button type="button" class="btn btn-outline-light btn-rounded">
                    Sign up!
                </button>
                </p>
            </section>
            </div>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
        </footer>
    </section> --}}
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
@endsection        
