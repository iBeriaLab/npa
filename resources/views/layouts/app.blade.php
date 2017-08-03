<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">

</head>
<body>
    <div id="app">
        <div class="no-padder left-fix left-s-nav">
            <ul class="nav">
               <!-- <li class="left-s-but"><i class="glyphicon ion-drag"></i></li>-->
                <li><a class="selected" href="{{ url('/') }}"><i class="glyphicon ion-paper-airplane"></i></a></li>
                <li><a href=""><i class="glyphicon ion-ios-pulse-strong"></i></a></li>
                <li><a href=""><i class="glyphicon ion-ios-partlysunny-outline"></i></a></li>
                <li><a href="{{ url('/') }}/countries"><i class="glyphicon ion-flag"></i></a></li>
                <li><a href=""><i class="glyphicon ion-ios-book-outline"></i></a></li>
            </ul>
            <div class="foot">
                <ul>
                    <li><img src="http://gaagrdzele.com/images/flags/svg/ge.svg"></li>
                    <li><img src="http://gaagrdzele.com/images/flags/svg/us.svg"></li>
                </ul>
            </div>
        </div>
        <div class="no-padder r-content">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="padder-s2">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;<li><a href="/countries">{{ trans('app.countries') }}</a></li>
                        <li><a href="/home">{{ trans('app.users') }}</a></li>
                        <li><a href="/posts">Posts</a></li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">




                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Login</b> <span class="caret"></span></a>
                                <ul id="login-dp" class="dropdown-menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-md-12">
                                                Login via
                                                <div class="social-buttons">
                                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                                </div>
                                                or
                                                <form class="form" role="form" method="post" action="login" accept-charset="UTF-8" id="login-nav">
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                        <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                        <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                                        <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                                    </div>
                                                    <div class="form-group">
                                                        <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox"> keep me logged-in
                                                        </label>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="bottom text-center">
                                                New here ? <a href="#"><b>Join Us</b></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
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
        <footer class="content-footer">
            asds
        </footer>

    </div>

    <!-- Scripts -->

    <script
            src="https://code.jquery.com/jquery-2.2.3.min.js"
            integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
            crossorigin="anonymous"></script>

    <script src="{{ asset('js/app.js') }}"></script>

<script type="application/javascript">
    $(document).ready(function () {
        $("#langSwitcher").change(function () {
            var locale = $(this).val();

            var _token = $("input[name=_token]").val();

            $.ajax({
                url: "/language",
                type: "POST",
                data: {locale: locale, _token: _token},
                datatype: 'json',

                success: function (data) {

                },
                error: function (data) {

                },
                beforeSend: function (data) {

                },
                complete: function (data) {
                    window.location.reload(true);
                }
            })

        })
    });
    document.getElementById('langSwitcher').value = 'ka';

    $(function(){
        $('.selectpicker').selectpicker();
    });



</script>
</body>
</html>
