@extends('layout')

@section('content')
	<div class="container">
		<h1>Edit Receipe</h1>

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form method="POST" action="/receipe/{{ $receipe->id }}">
			{{ method_field("PATCH") }}
			{{ csrf_field() }}
	 		<div class="form-group">
				<label for="receipe_name">Receipe Name</label>
				<input type="text" name="name" class="form-control" value="{{ $receipe->name }}" id="receipe_name" >
			</div>
			<div class="form-group">
				<label for="ingredients">Ingredients</label>
				<input type="text" name="ingredients" class="form-control" value="{{ $receipe->ingredients }}"  id="ingredients" required>
			</div>
			<div class="form-group">
				<label for="category">Category</label>
				{{ $receipe->categories->id }}
				<select name="category" class="form-control" required>
					@foreach($category as $value)
						<option value="{{ $value->id }}" {{ $receipe->categories->id == $value->id ? "selected" : "" }}>{{ $value->name }}</option>
					@endforeach
				</select>
			</div>
			<button type="submit" class="btn btn-primary">SUBMIT</button>
		</form>
	</div>
@endsection