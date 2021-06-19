@extends('layouts.frontend')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div id="carouselExampleSlidesOnly" class="carousel slide mb-3" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ secure_asset('img/slide-one.webp') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ secure_asset('img/slide-two.webp') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ secure_asset('img/slide-three.webp') }}" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ secure_asset('img/slide-four.webp') }}" class="d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <img src="{{ secure_asset('img/theater.jpg') }}" class="card-img-top" alt="..." style="height: 233px">
            <div class="card border-primary mt-3" style="height: 200px">
                <div class="card-header">Information</div>
                <div class="card-body text-primary">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
        </div>
    </div>
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
