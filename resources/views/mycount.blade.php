@extends('layouts.sidebar')

@section('content')
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('css/mycount.css')}}">
</head>
<div class="container">
    {{-- <p style="color: white;">hola {{ Auth::user()->name }}</p> --}}
    <div class="card" style="width: 100%;">
        <div class="card-body">
          {{-- <h5 class="card-title">Card title</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a> --}}
            <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                <div class="seccionFoto col">
                    <img class="foto" src="{{asset('img/perfil/perfil-de-usuario.jpg')}}" alt="">
                </div>
                <div class="col" style="background-color: black;">
                    <div class="infoUsuario">
                        <p>{{ Auth::user()->name }} </p>
                        <p>{{ Auth::user()->email }} </p>


                        <a style="color: black;" href="{{ route('mycount.edit', Auth::user()) }}">
                        <button class="btn btn-warning">
                        EDITAR    
                        </button>    
                        </a>
                        {{-- <ul>
                            @forelse($users as $users)
                            <li><a href="{{ route('mycount.show', $users) }}">{{ $users->name }}</a>
                                    <br>
                                    <small>{{ $users->email }}</small>
                                </li>
                            @empty			
                                <li>No hay proyectos</li>
                            @endforelse
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection