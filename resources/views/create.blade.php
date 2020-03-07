@extends('layout')

@section('content')
	<div class="container">
		<h1>Add New Receipe</h1>

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif

		<form method="POST" action="/receipe">
			{{ csrf_field() }}
	 		<div class="form-group">
				<label for="receipe_name">Receipe Name</label>
				<input type="text" name="name" class="form-control" id="receipe_name" value="{{ old('name') }}" required>
			</div>
			<div class="form-group">
				<label for="ingredients">Ingredients</label>
				<input type="text" name="ingredients" class="form-control" id="ingredients" value="{{ old('ingredients') }}" required>
			</div>
			<div class="form-group">
				<label for="category">Category</label>
				<select name="category" class="form-control" required>
					@foreach($category as $value)
						<option value="{{ $value->id }}">{{ $value->name }}</option>
					@endforeach
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button>
		</form>
	</div>
@endsection