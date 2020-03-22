@extends('layouts.publicLayout')

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card mb-4 box-shadow">
        <div class="card-body">
            <h3>{{ $receipe->name }}</h3>
            <p class="card-text">{{ $receipe->categories->name }}</p>
            <p>{{ $receipe->ingredients }}</p>
            <p>{{ $receipe->description }}</p>
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a href="/"><button type="button" class="btn btn-sm btn-outline-secondary">back</button></a>
                </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection