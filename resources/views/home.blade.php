@extends('layout')

@section('content')
	<div class="container">
		<h1>Home Page</h1>
		<div>
			<a href="receipe/create"><button class="btn btn-success">CREATE</button></a>
		</div>
		<ul>
		    @foreach($data as $value)
			    <li><a href="/receipe/{{ $value->id }}">{{ $value->name }}</a></li>
		    	<hr>
		    @endforeach
		</ul>
	</div>	  
@endsection