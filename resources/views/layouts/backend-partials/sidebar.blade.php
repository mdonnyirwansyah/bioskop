<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-ticket-alt"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Bioskop</div>
    </a>

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Nav Item - Main Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#mainPages"
            aria-expanded="true" aria-controls="mainPages">
            <i class="fas fa-fw fa-cog"></i>
            <span>Main Pages</span>
        </a>
        <div id="mainPages" class="collapse" aria-labelledby="headingMainPages" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Banner</a>
                <a class="collapse-item" href="#">Sliders</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Rooms Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#rooms"
            aria-expanded="true" aria-controls="rooms">
            <i class="fas fa-fw fa-landmark"></i>
            <span>Rooms</span>
        </a>
        <div id="rooms" class="collapse" aria-labelledby="headingRooms" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Theaters</a>
                <a class="collapse-item" href="#">Rows</a>
                <a class="collapse-item" href="#">Seats</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Movies Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#movies"
            aria-expanded="true" aria-controls="movies">
            <i class="fas fa-fw fa-film"></i>
            <span>Movies</span>
        </a>
        <div id="movies" class="collapse" aria-labelledby="headingMovies" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="#">Genres</a>
                <a class="collapse-item" href="#">Censor Ratings</a>
                <a class="collapse-item" href="{{ route('admin.movies.index') }}">Movies</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Schedules -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.schedules.index') }}">
            <i class="fas fa-fw fa-calendar"></i>
            <span>Schedules</span></a>
    </li>

    <!-- Nav Item - Transactions -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-receipt"></i>
            <span>Transactions</span></a>
    </li>

    <!-- Nav Item - Users -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-users"></i>
            <span>Users</span></a>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>