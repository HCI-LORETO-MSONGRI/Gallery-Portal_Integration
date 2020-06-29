<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://kit.fontawesome.com/c6911c03ae.js" crossorigin="anonymous"></script> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stingo.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div id="app">
        <div class="d-flex flex-column border-0 blueoverlay">
            <div class="card bg-transparent border-0 mb-0">
                <img style="cursor: none;" class="m-auto img img-responsive" height="100em" width="100em"
                    src="{{ asset('msongari/logobadge.png') }}" alt="LCM">
                <h5 class="card-title text-center text-danger">Loreto Convent
                    Msongari</h5>
            </div>
            <nav class="m-0 p-0 navbar navbar-expand-md navbar-default
                         navbar-fixed-top w-100" id="navlogo">
                <button class="m-auto navbar-toggler border-0" type="button" data-toggle="collapse"
                    data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle
                         navigation">
                    <span class="fas fa-angle-double-down"></span>
                </button>
                <div class="flex-fill blueoverlay mt-0 pt-0 navbar navbar-expand-md
                         w-100 bg-transparent collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        @guest
                        @else
                            <li class="nav-item">
                                <h2 class="m-auto btn btn-info">
                                    {{ Auth::user()->name }} 
                                        <small>
                                            <a class="badge badge-pill badge-danger"
                                                href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </small> 
                                </h2>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>

                        @endguest
                    </ul>
                    <ul class="navbar-nav ml-auto">

                        <li class="nav-item active">
                            <a class="nav-link" href="\home">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="\galleries">Gallery</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="moreabout" data-toggle="dropdown" href="">About</a>
                            <div class="dropdown-menu" aria-labelledby="moreabout">
                                <a href="#" class="dropdown-item text-dark">Mission</a>
                                <a href="#" class="dropdown-item text-dark">Vision</a>
                                <a href="#" class="dropdown-item text-dark">Contact Us</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="">Admissions</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" id="schlevels"
                                href="#">School
                                Levels</a>
                            <div class="dropdown-menu" aria-labelledby="schlevels">
                                <a href="#" class="dropdown-item text-dark">Kindergarten</a>
                                <a href="#" class="dropdown-item text-dark">Primary</a>
                                <a href="#" class="dropdown-item text-dark">Secondary</a>
                                <a href="#" class="dropdown-item text-dark">IGCSE</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="stddropdown" data-toggle="dropdown"
                                href="#">Students</a>
                            <div class="dropdown-menu" aria-labelledby="stddropdown">
                                <a class="dropdown-item text-dark" href="#">1</a>
                                <a class="dropdown-item text-dark" href="#">2</a>
                                <a class="dropdown-item text-dark" href="#">3</a>
                                <a class="dropdown-item text-dark" href="#">4</a>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="\students">Parents' Portal</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </div>

        <main class="">
            @include('inc.messages')
            @yield('content')
            
        </main>
    </div>

</body>

</html>
