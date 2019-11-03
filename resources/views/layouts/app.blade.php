<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Your Partnership Diary</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <link rel="icon" type="image/png" href="/images/icon2.png" />

    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .background {
            background: linear-gradient(to top left, navy, turquoise, beige);
        }
    </style>
</head>

<body style="font-family: Poppins; ">
    <div class="container-fluid"></div>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a href="/diaries">
                    <h3 ><b>Your Partnership Diary</b>
                    </h3>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        {{--<li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>--}}
                        @else
                        <a href="{{ URL::route('help') }}" class="btn btn-outline-info" style="margin: 10px;">Help</a>
                        <a href="{{ URL::route('diaries.index') }}" class="btn btn-outline-info"
                            style="margin: 10px;">My Diary</a>
                        <a href="{{ URL::route('admin.dashboard') }}" class="btn btn-outline-info"
                            style="margin: 10px;">Admin Area</a>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                style="margin-top: 10px;">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4 background">
            <center>
                <img class="img-responsive img-fluid " src="{{url(URL::asset('images/logo-horiz.png'))}}"
                    style="padding: 10px">
            </center>
            @yield('content')
        </main>
    </div>
    <br>
    @extends('layouts.footer')

    <script>
    
    // function BG() 
    // {
    //      if (bg_level <=5) {
    //         document.getElementById("BG".style.color = "blue";
    //     }
    // }
//     function myFunction() {
//   var bg_level = document.getElementById("BG");
//   bg_level.value = bg_level.value.style.color = 'blue';
// }

    </script>
</body>

</html>