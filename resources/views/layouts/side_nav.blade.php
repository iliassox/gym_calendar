@extends('layouts.app')

@section('content' )

    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">


        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading" ALIGN="center">DASHBOARD</div>
                            <a class="nav-link" href="{{ route('sessions.index') }}">
                                <div class="sb-nav-link-icon"><i class="bi bi-calendar3"></i></div>
                                Sessions
                            </a>
                            <a class="nav-link" href="{{ route('activities.index') }}">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Activities
                            </a>
                            <a class="nav-link" href="{{ route('coaches.index') }}">
                                <div class="sb-nav-link-icon"><i class="bi bi-person"></i></div>
                                Coaches
                            </a>
                            <a class="nav-link" href="{{ route('rooms.index') }}">
                                <div class="sb-nav-link-icon"><i class="bi bi-door-open-fill"></i></div>
                                Rooms
                            </a>
                            <a class="nav-link" href="{{ route('pendingIndex') }}">
                                <div class="sb-nav-link-icon"><i class="bi bi-hourglass-split"></i></div>
                                Pending sessions
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>

            @yield('side_nav_content')
                </main>
        </div>

        </div>
@endsection
