@extends('layouts.backend')

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('admin.schedules.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
            
            @include('backend.schedule.partials.form')
        
        </form>
    </div>
    <div class="card-footer">
        <a href="{{ route('admin.schedules.index') }}" class="btn btn-danger float-right text-uppercase">Back</a>
    </div>
</div>
@endsection