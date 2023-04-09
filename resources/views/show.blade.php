@extends('layouts.sidebar')
@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/show-estilos.css')}}">
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
    </head>  
    <div class="movie-info border-b border-gray-800">
        <div class="container mx-auto px-4 py-16 flex">
            <img src="{{asset('img/welcome-carrusel/1.jpg')}}"alt="poster" class="w-96" style="width: 24rem;">
            <div class="ml-24">
                <h2 class="text-4xl font-semibold">
                    Titulo de la pelicula (2023)
                </h2>
                <div class="flex items-center text-gray-480 text-sm mt-1" >
                    <i class="zmdi zmdi-star zmdi-hc-lg" style="color: #f5c518"></i>
                    <span class="ml-1"> 85% </span>
                    <span class="mx-2"> | </span>
                    <i class="fa fa-clock-o"></i>
                    <span>Feb 20, 2020</span>
                    <span class="mx-2"> | </span>
                    <span class="text-gray-400 text-sm">Action, Thriller, Drama</span>
                </div>   
                <p class="text-gra-300 mt-8">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aspernatur dignissimos minima ducimus unde, deserunt ab exercitationem expedita tempora ut quam id provident excepturi dolorem eveniet quas, voluptatum recusandae, incidunt quis.
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semiblod">Future Cast</h4>
                    <div class="flex mt-4">
                        <div>
                            <div>Bongo Joon-ho</div>
                            <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                        </div>
                        <div class="ml-8">
                            <div>Han Jin-won</div>
                            <div class="text-sm text-gray-400">Screenplay</div>
                        </div>
                    </div>
                </div>
                <div class="mt-12">
                    <button class="flex item-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                        <span class="ml-2">Play Tv n railer</span>
                    </button>
                </div>
            </div>
        </div>
    </div> <!--END movie-info-->
    
    <div class="movie-cast border-b border-gray-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">CAST</h2>
            <div class="container">
                <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                    {{-- @foreach ($popularMovies as $movie)   --}}
                        <div class="col">
                            <div class="card p-3">
                            <img src="{{asset('img/welcome-carrusel/1.jpg')}}" class="d-block w-100" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo de la peicula</h5>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3">
                            <img src="{{asset('img/welcome-carrusel/1.jpg')}}" class="d-block w-100" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo de la peicula</h5>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3">
                            <img src="{{asset('img/welcome-carrusel/1.jpg')}}" class="d-block w-100" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo de la peicula</h5>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3">
                            <img src="{{asset('img/welcome-carrusel/1.jpg')}}" class="d-block w-100" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo de la peicula</h5>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card p-3">
                            <img src="{{asset('img/welcome-carrusel/1.jpg')}}" class="d-block w-100" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Titulo de la peicula</h5>
                                    <a href="#" class="btn btn-primary">Go somewhere</a>
                                </div>
                            </div>
                        </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </div>
@endsection