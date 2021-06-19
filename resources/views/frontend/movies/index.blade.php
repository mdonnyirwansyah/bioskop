@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="mb-2 mt-3 d-flex align-items-center flex-column badge badge-primary">
        <h3> Now Playing </h3>
    </div>
    <div class="row">
        <div class="col-md-3 my-3">
            <a href="#">
                <div class="card" style="width: 100%;">
                    <img src="{{ secure_asset('img/film-one.webp') }}" class="card-img-top" alt="...">
                </div>
            </a>
        </div>
        <div class="col-md-3 my-3">
            <a href="#">
                <div class="card" style="width: 100%;">
                    <img src="{{ secure_asset('img/film-two.webp') }}" class="card-img-top" alt="...">
                </div>
            </a>
        </div>
        <div class="col-md-3 my-3">
            <a href="#">
                <div class="card" style="width: 100%;">
                    <img src="{{ secure_asset('img/film-three.webp') }}" class="card-img-top" alt="...">
                </div>
            </a>
        </div>
        <div class="col-md-3 my-3">
            <a href="#">
                <div class="card" style="width: 100%;">
                    <img src="{{ secure_asset('img/film-four.webp') }}" class="card-img-top" alt="...">
                </div>
            </a>
        </div>
    </div>
    <div class="mb-2 mt-3 d-flex align-items-center flex-column badge badge-success">
        <h3> Coming Soon </h3>
    </div>
    <div class="row">
        <div class="col-md-3 my-3">
            <a href="#">
                <div class="card" style="width: 100%;">
                    <img src="{{ secure_asset('img/film-one.webp') }}" class="card-img-top" alt="...">
                </div>
            </a>
        </div>
        <div class="col-md-3 my-3">
            <a href="#">
                <div class="card" style="width: 100%;">
                    <img src="{{ secure_asset('img/film-two.webp') }}" class="card-img-top" alt="...">
                </div>
            </a>
        </div>
        <div class="col-md-3 my-3">
            <a href="#">
                <div class="card" style="width: 100%;">
                    <img src="{{ secure_asset('img/film-three.webp') }}" class="card-img-top" alt="...">
                </div>
            </a>
        </div>
        <div class="col-md-3 my-3">
            <a href="#">
                <div class="card" style="width: 100%;">
                    <img src="{{ secure_asset('img/film-four.webp') }}" class="card-img-top" alt="...">
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
