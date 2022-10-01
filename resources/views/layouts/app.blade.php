{{-- <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Build a Landing Page with Laravel and Vue.js') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html> --}}

<!doctype html>
<html lang="eng">
    

<head>
        <!-- All Meta -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- page title -->
        <title>NgoziCRM </title>
        <!--All Css here -->
        <!--Bootstrap v3.3.7 css-->
        <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
        <!-- Fontawesome icon css -->
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <!-- Slick slider css -->
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.css">
        <!-- magnific popup css -->
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <!--main style css-->
        <link rel="stylesheet" href="assets/css/style.css">
        <!--Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css">

        {{-- <link rel="stylesheet" href="{{mix('css/app.css')}}"> --}}

        {{-- <!-- modernizr js -->
        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script> --}}
    </head>
    <body>
        <div id="app">
            <main class="py-4">
                @yield('content')
            </main>

        </div>

        <script src="{{mix('js/app.js')}}"></script>
        {{-- for webpack --}}
        <!--jequery-->
        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <!--Bootstrap min js-->
        <script src="assets/css/bootstrap/js/bootstrap.min.js"></script>
        <!--owl carousel js-->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- counterup js-->
        <script src="assets/js/jquery.counterup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <!-- magnific-popup js  -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <!-- isotope min.js  -->
        <script src="assets/js/isotope.min.js"></script>
        <!-- imageloaded js-->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!--main js-->
        <script src="assets/js/script.js"></script>
    </body>


</html>    