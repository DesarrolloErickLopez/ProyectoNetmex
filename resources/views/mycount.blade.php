@extends('layouts.sidebar')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mycount.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
</head>
<div class="container">
    <div class="card" style="width: 100%;">
        <div class="card-body">
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="seccionFoto col">
                    <img class="foto" src="{{asset('img/icono/logo.jpg')}}" alt="">
                </div>
                <div class="seccionInfo col" style="background-color: black;">
                    <div class="infoUser">
                        <p>{{ Auth::user()->name }} </p>
                        <p>{{ Auth::user()->email }} </p>


                        <a style="color: black;" href="{{ route('mycount.edit', Auth::user()) }}">
                        <button class="btn btn-warning">
                        EDITAR    
                        </button>    
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if ($historialMovies)
    <div class="container-fluid" style="margin-top: 5%;">
        <div class="row">
            <div class="col-md-12">
                <h1 class="titleSection">HISTORIAL</h1>
                <div id="news-slider" class="owl-carousel">                
                    @foreach ($historialMovies as $movie)  
                    <div class="post-slide">
                        <div class="post-img">
                            <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="Foto Pelicula">
                            <a href="{{ route('movies.show', $movie['id']) }}" class="over-layer"><i class="fa fa-link"></i></a>
                        </div>
                        <div class="post-content">
                            <h3 class="post-title">
                            <p class="movieTitle" >{{ $movie['title'] }}</p>
                            </h3>                                
                            <div class="movieInfo">
                                <span>
                                    <i class="zmdi zmdi-star zmdi-hc-lg" style="color: #f5c518"></i>
                                </span>
                                <p class="movieVoteTime">
                                {{ $movie['vote_average'] * 10 . '%' }}
                                </p>    
                                <span class="post-date">
                                    <i class="fa fa-clock-o"></i>
                                </span>
                                <p class="movieVoteTime">
                                {{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}
                                </p>                             
                            </div>                       
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @else
    <div class="empty">
        <p class="msjempty">Aún no se han reproducido películas</p>
    </div>
    @endif

    

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