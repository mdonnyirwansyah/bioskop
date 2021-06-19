@extends('layouts.frontend')

@push('scripts')
    <script>
        $(document).ready(function() {
            $('.select2multiple').select2();
        });
    </script>
@endpush

@section('content')
<div class="container">
    <div class="card">
        <div class="row no-gutters">
        <div class="col-md-4">
            <img src="{{ asset('img/film-one.webp') }}" style="width: 85%" alt="...">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h4 class="card-title">FAST & FURIOUS 9</h4>
                <div class="card-text text-muted">
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label col-form-label-md">Genre<span class="float-right">:</span></label>
                        <label class="col-md-10 col-form-label col-form-label-md">Action</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label col-form-label-md">Date<span class="float-right">:</span></label>
                        <label class="col-md-10 col-form-label col-form-label-md">Sat, 19 Jun 2021</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label col-form-label-md">Time<span class="float-right">:</span></label>
                        <label class="col-md-10 col-form-label col-form-label-md">10:00</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label col-form-label-md">Theater<span class="float-right">:</span></label>
                        <label class="col-md-10 col-form-label col-form-label-md">Theater 1</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label col-form-label-md">Duration<span class="float-right">:</span></label>
                        <label class="col-md-10 col-form-label col-form-label-md">142 Minutes</label>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2 col-form-label col-form-label-md">Pick Seats<span class="float-right">:</span></label>
                        <div class="col-md-10">
                            <select class="custom-select select2multiple" name="seats[]" id="seats" multiple>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                                <option value="4">four</option>
                                <option value="5">five</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row mt-4 mb-0">
                        <div class="col-6">
                            <a href="#" class="btn btn-block btn-danger">Previous</a>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-block btn-primary">Next</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
