@extends('layouts.backend')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
            
            @include('backend.movie.partials.form')
        
        </form>
    </div>
    <div class="card-footer">
        <a href="{{ route('admin.movies.index') }}" class="btn btn-danger float-right text-uppercase">Back</a>
    </div>
</div>
@endsection