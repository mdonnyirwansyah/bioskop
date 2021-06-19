@extends('layouts.main')

@section('mainStyles')
    <!-- Custom fonts for this template-->
    <link href="{{ secure_asset('sb-admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="{{ secure_asset('sb-admin/css/sb-admin-2.min.css') }}" rel="stylesheet">

    @stack('styles')
@endsection

@section('mainScripts')
    <!-- Bootstrap core JavaScript-->
    <script src="{{ secure_asset('sb-admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ secure_asset('sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ secure_asset('sb-admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ secure_asset('sb-admin/js/sb-admin-2.min.js') }}"></script>
    <script>
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        })
    </script>
    @stack('scripts')
@endsection

@section('body')
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.backend-partials.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Navbar -->
                @include('layouts.backend-partials.navbar')
                <!-- End of Navbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card shadow border-left-primary mb-3">
                        <div class="card-body text-dark">
                            <h5>Title</h5>
                        </div>
                    </div>
                    <!-- End of Page Heading -->

                    <!-- Page Body -->
                    @include('components.alert')
                    <!-- End of Page Body -->

                    <!-- Page Body -->
                    @yield('content')
                    <!-- End of Page Body -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            @include('layouts.backend-partials.footer')
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
@endsection