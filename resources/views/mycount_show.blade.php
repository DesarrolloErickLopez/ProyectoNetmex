@extends('layouts.sidebar')

	@section('title', 'Mycount | '.$user->name)

	@section('content')
		<h1>{{ $user->name }}</h1>

		<p>{{ $user->email }}</p>

        <a style="color: black;" href="{{ route('mycount.edit', $user) }}">Editar</a>

	@endsection