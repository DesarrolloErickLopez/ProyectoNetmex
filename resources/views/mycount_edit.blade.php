@extends('layouts.sidebar')

	@section('title', '.:: Editar proyecto ::.')

	@section('content')
		<h1>Editar proyecto</h1>

		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		@endif

		<form method="post" action="{{ route('mycount.update', $user) }}">
			@csrf @method('patch')
			<label>
				Nombre<br>
				<input type="text" name="name" value="{{ old('name', $user->name) }}">
			</label>
			<br>
			<label>
				Email<br>
                <input type="email" name="email" value="{{ old('name', $user->email) }}">
				{{-- <textarea name="email">{{ old('description', $user->email) }}</textarea> --}}
			</label>
			<br>
			<button>Actualizar</button>
		</form>

	@endsection