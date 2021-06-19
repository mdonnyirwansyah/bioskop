@extends('layouts.frontend')

@section('content')
<div class="container">
    <ul class="list-group list-group-horizontal">
        <li class="list-group-item active py-1">
            <a class="text-white" href="#">
                <p class="p-0 m-0">17 Jun</p>
                <p class="p-0 m-0">Sat</p>
            </a>
        </li>
        <li class="list-group-item py-1">
            <a class="text-dark" href="#">
                <p class="p-0 m-0">19 Jun</p>
                <p class="p-0 m-0">Sun</p>
            </a>
        </li>
        <li class="list-group-item py-1">
            <a class="text-dark" href="#">
                <p class="p-0 m-0">20 Jun</p>
                <p class="p-0 m-0">Mon</p>
            </a>
        </li>
    </ul>
    <hr>
    <div>
        <p>
            <strong>FAST & FURIOUS 9</strong>
            <br>
            <cite class="text-muted">Action / 143 Minutes / On screen since 16 Jun 2021</cite>
        </p>
        <a href="#" class="badge badge-secondary">10.30</a>
        <a href="#" class="badge badge-secondary">13.25</a>
        <a href="#" class="badge badge-secondary">16.20</a>
        <hr>
    </div>
    <div>
        <p>
            <strong>THE CONJURING: THE DEVIL MADE ME DO IT</strong>
            <br>
            <cite class="text-muted">Horror / 112 Minutes / On screen since 02 Jun 2021</cite>
        </p>
        <a href="#" class="badge badge-secondary">10.30</a>
        <a href="#" class="badge badge-secondary">13.25</a>
        <a href="#" class="badge badge-secondary">16.20</a>
        <hr>
    </div>
</div>
@endsection
