@extends('layouts.sidebar')

	@section('title', '.:: Editar proyecto ::.')

	@section('content')
    <head>
        <link rel="stylesheet" type="text/css" href="{{asset('css/mycount.css')}}">
    </head>
    <div class="container">
        <div class="card" style="width: 100%;">
            <div class="card-body">
                <div class="row row-cols-1 row-cols-lg-2 g-2 g-lg-3">
                    <div class="seccionFoto col">
                        <img class="foto" src="{{asset('img/perfil/perfil-de-usuario.jpg')}}" alt="">
                    </div>
                    <div class="col" style="background-color: black;">
                        <div class="infoUsuario">
                            @if($errors->any())
                                <ul>
                                    @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            <form method="post" action="{{ route('mycount.update', $user) }}">
                                @csrf @method('patch')
                                <div class="mb-3">
                                    <label for="formGroupExampleInput" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Ingrese el nuevo nombre"
                                    name="name" value="{{ old('name', $user->name) }}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="formGroupExampleInput2" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese el nuevo email"
                                    name="email" value="{{ old('name', $user->email) }}">
                                  </div>
                                <button class="btn btn-warning" >ACTUALIZAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        

	@endsection