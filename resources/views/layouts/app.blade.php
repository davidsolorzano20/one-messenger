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
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
 <link href='icon/plane.png' rel='icon' >


</head>
<body id="body_text">
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

<script>
/*	if(typeof process === 'object') {}
	else {
		var body = document.getElementById("body_text");
		body.remove('div');
	}*/
</script>

    <div id="app" style="display: none;">
        <nav class="navbar navbar-default navbar-fixed-top" style="height: 25px">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                  {{--  <button id="bar"  style="display: block;margin-top: 4px;" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-navicon fa-lg"></i>
                    </button>--}}

                    <a id="next"  style="display: block;margin-top: -1px;" href="#" class="toolbox collapsed">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-angle-right fa-2x"></i>
                    </a>

                    <a id="reload"  style="display: block;margin-top: 3px;" href="#" class="toolbox collapsed">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-refresh fa-lg"></i>
                    </a>

                    <a id="back"  style="display: block;margin-top: -1px;" href="#" class="toolbox collapsed">
                        <span class="sr-only">Toggle Navigation</span>
                        <i class="fa fa-angle-left fa-2x"></i>
                    </a>

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
                                <a href="#facebook" data-toggle="tab">
                                    <img src="services/facebook.png" style="width: 20px;"/>
                                    Facebook
                                    <span id="badge-facebook"  class="badge" style="display:none;left: 4px;position: absolute;margin-top: -32px;padding: 2px 3px;border-radius: 2px;background: rgb(254, 99, 99);color: rgb(255, 255, 255);font-size: 10px">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="#messenger" data-toggle="tab">
                                    <img src="services/messenger.png" style="width: 20px;"/>
                                    Messenger
                                    <span id="badge-messenger"  class="badge" style="display:none;left: 4px;position: absolute;margin-top: -32px;padding: 2px 3px;border-radius: 2px;background: rgb(254, 99, 99);color: rgb(255, 255, 255);font-size: 10px">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="#whatsapp" data-toggle="tab">
                                    <img src="services/whatsapp.png" style="width: 20px"/>
                                    Whatsapp
                                    <span id="badge-whatsapp"  class="badge" style="display:none;left: 4px;position: absolute;margin-top: -32px;padding: 2px 3px;border-radius: 2px;background: rgb(254, 99, 99);color: rgb(255, 255, 255);font-size: 10px">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="#telegram" data-toggle="tab">
                                    <img src="services/telegram.png" style="width: 20px"/>
                                    Telegram
                                    <span id="badge-telegram"  class="badge" style="display:none;left: 4px;position: absolute;margin-top: -32px;padding: 2px 3px;border-radius: 2px;background: rgb(254, 99, 99);color: rgb(255, 255, 255);font-size: 10px">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="#gmail" data-toggle="tab">
                                    <img src="services/gmail.png" style="width: 20px;"/>
                                    Gmail
                                    <span id="badge-gmail"  class="badge" style="display:none;left: 4px;position: absolute;margin-top: -32px;padding: 2px 3px;border-radius: 2px;background: rgb(254, 99, 99);color: rgb(255, 255, 255);font-size: 10px">New</span>
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
                                    <span id="badge-twitter"  class="badge" style="display:none;left: 4px;position: absolute;margin-top: -32px;padding: 2px 3px;border-radius: 2px;background: rgb(254, 99, 99);color: rgb(255, 255, 255);font-size: 10px">New</span>
                                </a>
                            </li>
                            <li>
                                <a href="#youtube" data-toggle="tab">
                                    <img src="services/youtube.png" style="width: 25px;"/>
                                    Youtube
                                    <span id="badge-youtube"  class="badge" style="display:none;left: 4px;position: absolute;margin-top: -32px;padding: 2px 3px;border-radius: 2px;background: rgb(254, 99, 99);color: rgb(255, 255, 255);font-size: 10px">New</span>
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
<script>

</script>
</body>
</html>
