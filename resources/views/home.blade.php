@extends('layout')

@section('content')
	<h1>Home Page</h1>
	<ul>
	    @foreach($data as $value)
		    <li>Name - {{ $value->name }}</li>
		    <li>Ingredients - {{ $value->ingredients }}</li>
		    <li>Category - {{ $value->category }}</li>
	    	<hr>
	    @endforeach
	</ul>    
@endsection