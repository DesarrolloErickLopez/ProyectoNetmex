@extends('layouts.sidebar')

@section('content')
<head>
<link rel="stylesheet" type="text/css" href="{{asset('css/home-estilos.css')}}">
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

            @foreach ($popularMovies as $movie)
            <div>
                <p>{{ $movie['title'] }}</p>
            </div>
            @endforeach



        </div>
        
    </div>
</div>
@endsection
