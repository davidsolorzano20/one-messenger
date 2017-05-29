<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>One Messenger</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/loader.css') }}" rel="stylesheet">
</head>
<body>
<div id="loader_app">
    <div class="imagen" style="padding-top: 10%;text-align: center;">
        <img src="icon/plane.png" style="width: 230px;margin: 0 auto;display: block;">
        <br>

        <svg class="spinner" width="35px" height="35px" viewBox="0 0 66 66" xmlns="http://www.w3.org/2000/svg"><circle class="circle" fill="none" stroke-width="6" stroke-linecap="round" cx="33" cy="33" r="30"></circle></svg>
        <h1>
            Cargando
        </h1>

    </div>
</div>

    <div id="app" style="display: none;">
        <nav class="navbar navbar-default navbar-fixed-top" style="height: 25px">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="#" style=" margin-left: 20px;">
                        <img src="icon/plane.png" style="width: 70px;margin-top: -26px;position: absolute;margin-left: -60px;"/>
                        <strong style="color: #607D8B;">One Messenger</strong>
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav nav-tabs navbar-right" style="margin-top: -2px;">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="active">
                                <a href="#gmail" data-toggle="tab">
                                    <img src="services/gmail.png" style="width: 20px;"/>
                                    Gmail
                                </a>
                            </li>
                            <li>
                                <a href="#facebook" data-toggle="tab">
                                    <img src="services/facebook.png" style="width: 20px;"/>
                                    Facebook
                                </a>
                            </li>
                            <li>
                                <a href="#messenger" data-toggle="tab">
                                    <img src="services/messenger.png" style="width: 20px;"/>
                                    Messenger
                                </a>
                            </li>
                            <li>
                                <a href="#whatsapp" data-toggle="tab">
                                    <img src="services/whatsapp.png" style="width: 20px"/>
                                    Whatsapp
                                </a>
                            </li>
                            <li>
                                <a href="#telegram" data-toggle="tab">
                                    <img src="services/telegram.png" style="width: 20px"/>
                                    Telegram
                                </a>
                            </li>
                            {{--<li>
                                <a href="#linkedin" data-toggle="tab">
                                    <img src="services/linkedin.png" style="width: 20px;"/>
                                    Linkedin
                                </a>
                            </li>--}}
                            <li>
                                <a href="#twitter" data-toggle="tab">
                                    <img src="services/twitter.png" style="width: 20px;"/>
                                    Twitter
                                </a>
                            </li>
                            <li>
                                <a href="#youtube" data-toggle="tab">
                                    <img src="services/youtube.png" style="width: 25px;"/>
                                    Youtube
                                </a>
                            </li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/window.js') }}"></script>
</body>
</html>
