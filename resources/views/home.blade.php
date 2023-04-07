@extends('layouts.sidebar')
@section('content')
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/home-estilos.css')}}">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
</head>
<div class="container">    
    <div class="row justify-content-center">
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
    </div>    
    <!-- ESTA ES LA BASE -->
        <!-- <div class="row row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
            @foreach ($popularMovies as $movie)            
            <div class="card col" style="width: 23%;">
            <img src="{{asset('img/welcome-carrusel/1.jpg')}}" class="d-block w-100" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie['title'] }}</h5>
                    
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            @endforeach
        </div> -->
    <!-- PRUEBA CON CHUNK Y COLLECT -->
        <!-- <div class="container">
            @foreach (collect($popularMovies)->chunk(5) as $movies)  
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                @foreach ($movies as $mov)  
                <div class="col">
                    <div class="card p-3">
                        <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$mov['poster_path'] }}" class="d-block w-100" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $mov['title'] }}</h5>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div> -->
    <!-- ESTE ES EL BUENO AQUI -->
        <!-- <div class="container">
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
        </div> -->
    <!-- ESTA ES LA NUEVA PRUEBA -->
        <!-- <div class="container">
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
        </div> -->

        <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            <div id="news-slider" class="owl-carousel">
                
            @foreach ($popularMovies as $movie)  
                <div class="post-slide">
                <div class="post-img">
                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="Foto Pelicula">
                    <a href="#" class="over-layer"><i class="fa fa-link"></i></a>
                </div>
                <div class="post-content">
                    <h3 class="post-title">
                    <p>{{ $movie['title'] }}</p>
                    </h3>
                    <p class="post-description">
                    Descripción
                    </p>
                    <p>
                        
                    </p>
                    <span class="post-date"><i class="fa fa-clock-o"></i>
                    año
                    </span>
                    <a href="#" class="read-more">Ver Pelicula</a>
                </div>
                </div>
            @endforeach
            </div>
            </div>
        </div>
        </div>
      
</div>
<script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
$(function() {
    $("#news-slider").owlCarousel({
        items :4,
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
