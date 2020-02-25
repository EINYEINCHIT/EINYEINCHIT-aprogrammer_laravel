@extends('layout')

@section('title')
	PHP
@endsection

@section('content')
	<h1>PHP Page</h1>
	<ul>
		@foreach($data as $value)
			<li>{{ $value }}</li>
		@endforeach
	</ul>
@endsection