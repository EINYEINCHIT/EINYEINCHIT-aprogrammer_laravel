@extends('layout')

@section('content')
	<div class="container">
		<h1>Home Page</h1>
		<ul>
		    @foreach($data as $value)
			    <li><a href="/receipe/{{ $value->id }}">Name - {{ $value->name }}</a></li>
			    <li>Ingredients - {{ $value->ingredients }}</li>
			    <li>Category - {{ $value->category }}</li>
		    	<hr>
		    @endforeach
		</ul>
	</div>	  
@endsection