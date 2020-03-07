@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Home Page</h1>
                    <div>
                        <a href="receipe/create"><button class="btn btn-success">CREATE</button></a>
                    </div>
                    <ul>
                        @foreach($data as $value)
                            <li><a href="/receipe/{{ $value->id }}">{{ $value->name }}</a></li>
                            <hr>
                        @endforeach
                    </ul>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
