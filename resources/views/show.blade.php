@extends('layout')

@section('content')
	<div class="container">
		<h1>{{ $receipe->name }}</h1>
		<ul>
			<li>Name - {{ $receipe->name }}</li>
		    <li>Ingredients - {{ $receipe->ingredients }}</li>
		    <li>Category - {{ $receipe->categories->name }}</li>
		</ul>
		
		<a href="/receipe/{{ $receipe->id }}/edit"><button class="btn btn-success">EDIT</button></a>

		<form method="POST" action="/receipe/{{ $receipe->id }}">
			{{ method_field("DELETE") }}
			{{ csrf_field() }}

			<button type="submit" class="btn btn-primary">DELETE</button>
		</form>
	</div>	 
@endsection