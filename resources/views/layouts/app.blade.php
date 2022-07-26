<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <style>
        .scroll {
            overflow-y: hidden;
        }
    </style>

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-info shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register Admin') }}</a>
                                </li>
                            @endif --}}
                            @if (Route::has('registers'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('registers') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <nav class="navbar navbar-expand-lg bg-info">
                                <div class="container-fluid">

                                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                                        aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link  {{ Request::RouteIs('halaman') ? 'active' : '' }}"
                                                    aria-current="page" href="{{ route('halaman') }}">Halaman Utama</a>
                                            </li>
                                            @if (Auth::user()->name != 'ADMIN')
                                                <li class="nav-item">
                                                    <a class="nav-link  {{ Request::RouteIs('hasil') ? 'active' : '' }}"
                                                        aria-current="page" href="{{ route('hasil') }}">Hasil</a>
                                                </li>
                                                {{-- <li class="nav-item">
                                                    <a class="nav-link  {{ Request::RouteIs('nilai') ? 'active' : '' }}"
                                                        aria-current="page" href="{{ route('nilai') }}">Input</a>
                                                </li> --}}
                                                <li class="nav-item dropdown">
                                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                        role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                        aria-expanded="false" v-pre>
                                                        Input
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="navbarDropdown">
                                                        <a class="dropdown-item" href="{{ route('nilai') }}">
                                                            {{ __('Nilai') }}
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('tambah_profesi') }}">
                                                            {{ __('Profesi Minat & Bakat') }}
                                                        </a>

                                                    </div>
                                                </li>
                                            @else
                                                <li class="nav-item">
                                                    <a class="nav-link  {{ Request::RouteIs('hasils') ? 'active' : '' }}"
                                                        aria-current="page" href="{{ route('hasils') }}">Hasil</a>
                                                </li>
                                            @endif

                                        </ul>
                                    </div>

                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                            role="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false" v-pre>
                                            {{ ucwords(Auth::user()->name) }} {{ Session::get('nim') }}
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </div>
                            </nav>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            <section class="container">
                @yield('content')
            </section>
        </main>
    </div>

    <!-- JavaScript Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>

</body>

</html>
