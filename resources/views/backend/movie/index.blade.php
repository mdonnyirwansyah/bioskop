@extends('layouts.backend')

@push('styles')
    <link href="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush

@push('scripts')
    <script src="{{ asset('sb-admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('sb-admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        } );
    </script>
@endpush

@section('content')
    <div class="card shadow border-bottom-primary mb-4">
        <div class="card-header py-3">
            <a href="{{ route('admin.movies.create') }}" class="btn btn-primary float-right">Add</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="datatables" class="table table-striped table-bordered dt-responsive wrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Title</th>
                            <th>Since</th>
                            <th>Genre</th>
                            <th>Censor Rating</th>
                            <th>Director</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($movies as $index => $movie)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $movie->title }}</td>
                            <td>{{ $movie->since }}</td>
                            <td>{{ $movie->genre->name }}</td>
                            <td>{{ $movie->censorRating->name }}</td>
                            <td>{{ $movie->director }}</td>
                            <td class="text-center">
                                <a href="{{ route('admin.movies.edit', $movie->id) }}" class="btn btn-sm btn-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                    <i class="fas fa-pen"></i>
                                </a> 
                                <form class="d-inline" action="{{ route('admin.movies.destroy', $movie->id) }}" method="POST" onsubmit="return confirm('Yakin hapus data?')">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn btn-sm btn-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection