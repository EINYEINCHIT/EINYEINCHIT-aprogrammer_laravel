@extends('layouts.adminLayout')

@section('content')
	<div class="container my-3">
		
		<div class="row">
			<div class="col"><h2>Create Receipe</h2></div>
		</div>

		{{-- error alert --}}
		<div class="row">
			<div class="col">
				@component('alert')
				@endcomponent
			</div>
		</div>

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
			<div class="form-group">
				<label for="description">Description</label>
				<textarea rows="5" name="description" class="form-control" id="description" required>{{ old('description') }}</textarea>
			</div>
			<button type="submit" class="btn btn-primary">SUBMIT</button>
		</form>

	</div>
@endsection