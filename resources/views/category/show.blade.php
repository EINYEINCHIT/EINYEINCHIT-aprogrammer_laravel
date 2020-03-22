@extends('layouts.adminLayout')

@section('content')
	<div class="container">

		<div class="row mt-3">
			<div class="col"><h2>Category Detail</h2></div>
		</div>

		<div class="row">
			<div class="col">
				<ul class="list-group">
					<li class="list-group-item list-group-item-dark">{{ $category->name }}</li>
					<li class="list-group-item">Description - {{ $category->description }}</li>
					<li class="list-group-item text-center">
						<a href="/category"><button class="btn btn-outline-secondary">BACK</button></a>
						<a href="/category/{{ $category->id }}/edit"><button class="btn btn-primary">EDIT</button></a>
						<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirmModal">DELETE</button>
						<!-- Modal -->
                        <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirm</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete it?
                                    </div>
                                    <div class="modal-footer">
                                        <form method="POST" action="/category/{{ $category->id }}" class="d-inline-block">
                                            {{ method_field("DELETE") }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-primary">YES</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                                    </div>
                                </div>
                            </div>
                        </div>
					</li>
				</ul>
			</div>
		</div>
		
	</div>	 
@endsection