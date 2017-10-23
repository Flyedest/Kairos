<html>

<head>

    <!--Look at those lines -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="/css/stylesheet.css" type="text/css" rel="stylesheet" />
    <link href="/css/app.css" type="text/css" rel="stylesheet" />
    <link href="/css/bootstrap.css" type="text/css" rel="stylesheet" />
    <link href="/css/fontawesome.min.css" type="text/css" rel="stylesheet" />

    <!-- <stylesheet do menu> -->
    <link rel="stylesheet" type="text/css" href="/css/menu-scroll.css">
    <script type="text/javascript" src="/js/menu-scroll.js"></script>
    <!-- </stylesheet do menu> -->

    <script type="text/javascript">
        function MenuCadastro() {
            location.href = "/horario/novo";
        }

    </script>
    <title>Kairos - @yield('title')</title>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top menu-scroll"><!-- classe adicionada "menu-scroll" -->
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
                    @if(Auth::guest())
                    <a class="navbar-brand navbar-brand-scroll" href="{{ url('/') }}">
                        Kairos<small><small><small><small>Beta version</small></small></small></small>
                    </a>
                    @else
                    <a class="navbar-brand navbar-brand-scroll" href="{{ url('/menu') }}">
                        Kairos<small><small><small><small>Beta version</small></small></small></small>
                    </a>
                    @endif
                </div>
            <!--<div class="container-fluid">-->
                <div class="collapse navbar-collapse div-drop" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-none">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Registrar-se</a></li>
                        @else
                        <li>@yield('Back')</li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
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
            <!--</div>-->
            </div>
        </nav>

        <!-- div extra transparente para compensar o "position: fixed;" do nav-->
        <div class="container-fluid filler">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
        @yield('content')
    </div>
</body>

</html>
