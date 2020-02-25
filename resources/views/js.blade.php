@extends('layout')

@section('title')
	JS
@endsection

@section('content')
	<h1>JS Page</h1>
	<ul>
		@foreach($data as $value)
			<li>{{ $value }}</li>
		@endforeach
	</ul>
@endsection