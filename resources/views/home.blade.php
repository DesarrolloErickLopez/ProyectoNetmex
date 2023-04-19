@extends('layouts.sidebar')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/home-estilos.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
</head>  

<!-- CARRUSEL DE PORTADA HASTA EL MOMENTO -->
<div id="carouselExampleCaptions" class="headCarousel carousel slide">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="{{asset('img/home-carrusel/peliculas.jpg')}}" class="d-block w-100 h-50" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{asset('img/home-carrusel/series.jpg')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="{{asset('img/home-carrusel/seVeChida.png')}}" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- CONTENEDOR PRINCIPAL DE SERIES Y PELICULAS -->
<div class="container"> 
    <!-- ESTA ES LA CARTA DE PRESENTACION -->
        {{-- <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You are logged in!') }}
                    </div>
                </div>
            </div>
        </div> --}}
    <!-- ESTA ES LA BASE -->
        {{-- <div class="row row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($popularMovies as $movie)            
            <div class="card col" style="width: 23%;">
            <img src="{{asset('img/welcome-carrusel/1.jpg')}}" class="d-block w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                    
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            @endforeach
        </div> --}}
    <!-- ESTE ES EL BUENO AQUI -->
        {{-- <div class="container">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                @foreach ($popularMovies as $movie)  
                    <div class="col">
                        <div class="card p-3">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" class="d-block w-100" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $movie['title'] }}</h5>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div> --}}

        <!-- POPULAR MOVIES -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="titleSection">POPULAR</h1>
                    <div id="news-slider" class="owl-carousel">                
                        @foreach ($popularMovies as $movie)  
                        <x-movie-card :movie="$movie" :genres="$genres"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="titleSection">TOP</h1>
                    <div id="news-slider2" class="owl-carousel">                
                        @foreach ($topRatedMovies as $movie)  
                        <x-movie-card :movie="$movie" :genres="$genres"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="titleSection">TOP</h1>
                    <div id="news-slider3" class="owl-carousel">                
                        @foreach ($upComingMovies as $movie)  
                        <x-movie-card :movie="$movie" :genres="$genres"/>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        {{-- NOW PLAYING MOVIES --}}
        {{-- <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider2" class="owl-carousel">                
                    @foreach ($nowPlayingmovies as $movie)  
                        <x-movie-card :movie="$movie" :genres="$genres"/>
                    @endforeach        
                    </div>
                </div>
            </div>
        </div>  --}}
        
</div>    

<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
    $(function() {
        $("#news-slider").owlCarousel({
            items :5,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:true,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });
    $(function() {
        $("#news-slider2").owlCarousel({
            items :5,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:true,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });
    $(function() {
        $("#news-slider3").owlCarousel({
            items :5,
            itemsDesktop:[1199,3],
            itemsDesktopSmall:[980,2],
            itemsMobile : [600,1],
            navigation:true,
            navigationText:["",""],
            pagination:true,
            autoPlay:true
        });
    });
</script>
@endsection
