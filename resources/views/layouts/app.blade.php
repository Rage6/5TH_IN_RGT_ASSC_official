<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', '5th Infantry Regiment Association') }}</title>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="/{{ asset(config('app.url_ext').'js/app.js') }}" defer></script>
    <script src="/{{ asset(config('app.url_ext').'js/my_custom/home/home.js') }}" defer></script>
    <script src="/{{ asset(config('app.url_ext').'js/my_custom/home/admin.js') }}" defer></script>
    <!-- Personally added JS -->
    <!-- jQuery 3.6.0 -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <!-- Fonts -->

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/my_custom/layout_header.css') }}" rel="stylesheet"> -->
    <link href="{{ asset('css/my_custom/home/360_home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my_custom/home/375_home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my_custom/home/414_home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my_custom/home/768_home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my_custom/home/1366_home.css') }}" rel="stylesheet">
    <link href="{{ asset('css/my_custom/home/1920_home.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <!-- {{ config('app.name', 'Laravel') }} -->
                    <img src="/images/welcome/5INF_crest-min.png">
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
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <!-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif -->
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('home') }}">
                                     {{ __('Dashboard') }}
                                  </a>
                                  <a class="dropdown-item" href="{{ route('edit') }}">
                                     {{ __('Change Account') }}
                                  </a>
                                  @if (Auth::user()->admin == 1)
                                  <!-- <a class="dropdown-item" href="{{ route('admin') }}"> -->
                                  <a class="dropdown-item" href="{{ route('admin',['member_num'=>0,'casualty_num'=>0,'recipient_num'=>0]) }}">
                                     {{ __('Administration') }}
                                  </a>
                                  @endif
                                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
</html>
