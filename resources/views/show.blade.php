@extends('layouts.sidebar')
@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/show-estilos.css')}}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        {{-- LIINKS PARA EL CARRUSEL --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
        {{-- <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script> --}}
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">
    </head>
{{-- DIV PARA LA INFO DE LA PELICULA --}}
    <div class="container movie-info border-b border-gray-800" style="background-color: #00000030;">
        {{-- <div class="row row-cols-2 row-cols-lg-2 g-2 g-lg-3 container mx-auto px-4 py-16 "> --}}
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col imgCol" >
                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="Foto Pelicula" class="w-96" style="width: 24rem; margin:auto;">
            </div>
            <div class="col">
                <div class="description" style="padding: 2%">
                    <h2 class="text-4xl font-semibold">
                        {{ $movie['title'] }}
                    </h2>
                    <div class="flex items-center text-gray-480 text-sm mt-1" >
                        <i class="zmdi zmdi-star zmdi-hc-lg" style="color: #f5c518"></i>
                        <span class="ml-1">
                                {{ $movie['vote_average'] * 10 . '%' }}
                        </span>
                        <span class="mx-2"> | </span>
                        <i class="fa fa-clock-o"></i>
                            {{\Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')}}
                        <span class="mx-2"> | </span>
                        @foreach ($movie['genres'] as $genre)
                            <span class="text-gray-400 text-sm">
                                {{ $genre['name'] }} @if(!$loop->last),@endif
                            </span>
                        @endforeach
                    </div>
                    <p class="text-gra-300 mt-8">
                        {{$movie['overview']}}
                    </p>

                    <div class="mt-12" style="margin-top: 10%">
                        <h4 class="text-white font-semiblod">Future Cast</h4>
                        <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3">
                            @foreach ( $movie['credits']['crew'] as $crew)
                                @if ($loop->index < 3)
                                    <div class="col">
                                        <div>{{ $crew['name'] }}</div>
                                        <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
                                    </div>
                                @endif
                            @endforeach                     
                        </div>
                    </div>
                    {{-- @if (count($movie['videos']['results']) > 0 )
                        <div class="mt-12" style="margin-top: 10%">
                            <a style="color:black !important;" href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" type="button" class="btn btn-warning btn-lg">
                                <i class="bi bi-caret-right-fill"></i>
                                <span class="ml-2">Play Trailer</span>
                            </a>
                        </div>
                    @endif --}}
                    <div class="mt-12" style="margin-top: 10%">
                        <button style="color:black !important;" type="button" class="btn btn-warning btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <i class="bi bi-caret-right-fill"></i>
                            <span class="ml-2">Play Trailer</span>
                        </button>                         
                    </div>
                </div>
            </div>
        </div>
    </div> <!--END movie-info-->

{{-- DIV DE PRUEBA PARA LA REPRODUCCION DEL VIDEO --}}
    {{-- <div class="container movie-info border-b border-gray-800" style="background-color: #00000030; margin-top: 5%;">
        <P>VIDEO</P>
        <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
            <div class="col">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}?" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div> --}}

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog"
        style="max-width: 80%">
          <div class="modal-content">
            <div class="modal-header" style="background: url({{asset('img/fondo/fondo_welcome1.jpg')}});">
              <button type="button" class="btn btn-dark" data-bs-dismiss="modal" aria-label="Close"><i class="bi bi-x-circle"></i></button>
            </div>
            <iframe width="100%" height="500px" src="https://www.youtube.com/embed/{{ $movie['videos']['results'][0]['key'] }}?" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
    </div>
      



{{-- DIV PARA EL CAST  DE LA PELICULA --}}
    <div class="container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="titleSection">CAST</h1>
                    <div id="news-slider" class="owl-carousel">                
                        @foreach ( $movie['credits']['cast'] as $cast) 
                            <div class="post-slide">
                                <div class="post-img">
                                    <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$cast['profile_path'] }}" alt="">
                                    <a href="{{ route('movies.show', $movie['id']) }}" class="over-layer"><i class=""></i></a>
                                </div>
                                <div class="post-content">
                                    <h3 class="post-title">
                                        <p class="movieTitle" >{{ $cast['name'] }}</p>
                                    </h3>                                
                                    <h3 class="post-title">
                                        <p class="movieTitle" >{{ $cast['character'] }}</p>
                                    </h3>                                
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>    
{{-- DIV PARA LAS IMAGENES DE LA  PELICULA --}}
    <div class="movie-images">
        <div class="container mx-auto px-4 py-16">
            <h2 class="titleSection2 text-4xl font-semibold">IMAGES</h2>   
            <br> 
            <div class="row row-cols-1 row-cols-lg-3 g-2 g-lg-3" style="text-align: center">
                @foreach ( $movie['images']['backdrops'] as $image)
                    @if ($loop->index < 9)
                        <div class="col">
                            <a href="#">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$image['file_path'] }}" alt="picture" style="width: 100%;">
                            </a>
                        </div>
                    @endif
                @endforeach
                
            </div>
        </div>        
    </div>

{{-- SCRIPTS PARA EL CARRUSELSS --}}
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