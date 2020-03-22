@extends('layouts.adminLayout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col text-center">

            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            
            <p class="my-5">Please Login To Continue.</p>
            
        </div>
    </div>
</div>
@endsection