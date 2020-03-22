@extends('layouts.adminLayout')

@section('content')
	<div class="container my-3">
		
		<div class="row">
			<div class="col"><h2>Edit Receipe</h2></div>
		</div>

		{{-- error alert --}}
		<div class="row">
			<div class="col">
				@component('alert')
				@endcomponent
			</div>
		</div>

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
			<div class="form-group">
				<label for="description">Description</label>
				<textarea rows="5" name="description" class="form-control" id="description" required>{{ $receipe->description }}</textarea>
			</div>
			<button type="submit" class="btn btn-primary">SUBMIT</button>
		</form>

	</div>
@endsection