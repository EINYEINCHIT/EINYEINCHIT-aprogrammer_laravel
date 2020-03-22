@extends('layouts.adminLayout')

@section('content')
	<div class="container my-3">
		
		<div class="row">
			<div class="col"><h2>Create Category</h2></div>
		</div>

		{{-- error alert --}}
		<div class="row">
			<div class="col">
				@component('alert')
				@endcomponent
			</div>
		</div>

		<form method="POST" action="/category">
			{{ csrf_field() }}
	 		<div class="form-group">
				<label for="category_name">Category Name</label>
				<input type="text" name="name" class="form-control" id="category_name" value="{{ old('name') }}" required>
			</div>
			<div class="form-group">
				<label for="description">Description</label>
				<textarea rows="5" name="description" class="form-control" id="description" required>{{ old('description') }}</textarea>
			</div>
			<button type="submit" class="btn btn-primary">SUBMIT</button>
		</form>

	</div>
@endsection