@extends('layout')

@section('content')
	<div class="container">
		<h1>Add New Receipe</h1>
		<form method="POST" action="/receipe">
			{{ csrf_field() }}
	 		<div class="form-group">
				<label for="receipe_name">Receipe Name</label>
				<input type="text" name="name" class="form-control" id="receipe_name">
			</div>
			<div class="form-group">
				<label for="ingredients">Ingredients</label>
				<input type="text" name="ingredients" class="form-control" id="ingredients">
			</div>
			<div class="form-group">
				<label for="category">Category</label>
				<input type="text" name="category" class="form-control" id="category">
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection