@extends('layouts.main')

@section('mainStyles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('mainScripts')
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('scripts')
@endsection

@section('body')
    <div id="app">
        @include('layouts.frontend-partials.navbar')
        <div class="card m-0 p-0" style="width: 100%;">
            <img src="{{ asset('img/banner.webp') }}" class="card-img-top" alt="...">
        </div>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
@endsection