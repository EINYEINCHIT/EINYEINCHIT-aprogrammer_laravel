@extends('layouts.adminLayout')

@section('content')
<div class="container my-3">

    <div class="row">
        <div class="col"><h2>Receipe List</h2></div>
        <div class="col-auto"><a href="receipe/create"><button class="btn btn-success">CREATE</button></a></div>
    </div>

    {{-- success alert --}}
    <div class="row">
        <div class="col">
            @component('alert')
            @endcomponent
        </div>
    </div>

    <table class="table table-striped">
        <thead>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Ingredients</th>
            <th scope="col">Category</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $value)
                <tr>
                    <th>
                        <a href="/receipe/{{ $value->id }}/edit"><button class="btn btn-primary ">EDIT</button></a>
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
                                        <form method="POST" action="/receipe/{{ $value->id }}" class="d-inline-block">
                                            {{ method_field("DELETE") }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-primary">YES</button>
                                        </form>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </th>
                    <td><a href="/receipe/{{ $value->id }}">{{ $value->name }}</a></td>
                    <td>{{ $value->ingredients }}</td>
                    <td>{{ $value->categories->name }}</td>
                </tr>
            @endforeach    
        </tbody>
    </table>

    <div class="row justify-content-center">
        <div class="col-auto">
            {{ $data->links() }}
        </div>
    </div>   
        
</div>
@endsection
