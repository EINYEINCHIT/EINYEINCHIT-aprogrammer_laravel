@extends('layout')

@section('content')
	<div class="container">
		<h1>Edit Receipe</h1>
		<form method="POST" action="/receipe/{{ $receipe->id }}">
			{{ method_field("PATCH") }}
			{{ csrf_field() }}
	 		<div class="form-group">
				<label for="receipe_name">Receipe Name</label>
				<input type="text" name="name" class="form-control" value="{{ $receipe->name }}" id="receipe_name">
			</div>
			<div class="form-group">
				<label for="ingredients">Ingredients</label>
				<input type="text" name="ingredients" class="form-control" value="{{ $receipe->ingredients }}"  id="ingredients">
			</div>
			<div class="form-group">
				<label for="category">Category</label>
				<input type="text" name="category" class="form-control" value="{{ $receipe->category }}" id="category">
			</div>
			<button type="submit" class="btn btn-primary">SUBMIT</button>
		</form>
	</div>
@endsection