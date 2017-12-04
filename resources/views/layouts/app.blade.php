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
    <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
     <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css">
</head>
<body>
    <div id="app">
      <nav class="navbar navbar-expand-lg navbar-dark indigo">
     <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
   <div class="collapse navbar-collapse" id="navbarNav1">
        @if (Auth::guest())
        <ul class="navbar-nav mr-auto">
        </ul>
        @else
        <ul class="navbar-nav mr-auto">
 <li class="nav-item waves-effect">
                    <a class="nav-link waves-effect" href="{{ URL::to('home') }}"><i class="fa fa-home left"></i>&nbsp;Pagina Principal</a>
                </li>

                 <li class="nav-item waves-effect">
                    <a class="nav-link waves-effect" href="{{ Route('clases.index') }}"><i class="fa fa-clipboard left"></i>&nbsp;Clases</a>
                </li>

                 <li class="nav-item waves-effect">
                    <a class="nav-link waves-effect" href="{{ Route('ciudads.index') }}"><i class="fa fa-map-marker left"></i>&nbsp;Ciudades</a>
                </li>

                 <li class="nav-item waves-effect">
                    <a class="nav-link waves-effect" href="{{ Route('clientes.index') }}"><i class="fa fa-user left"></i>&nbsp;Clientes</a>
                </li>

                 <li class="nav-item waves-effect">
                    <a class="nav-link waves-effect" href="{{ Route('proveedors.index') }}"><i class="fa fa-users left"></i>&nbsp;Proveedores</a>
                </li>
                </ul>
        @endif
        <ul class="navbar-nav nav-flex-left">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                           <li class="nav-item waves-effect">
                        <a id="ir" class="nav-link waves-effect" href="{{ route('login') }}"><i class="fa fa-sign-in left"></i>&nbsp;Login</a>
                </li>
                        @else
                             <li class="nav-item dropdown  btn-group">
                    <a class="nav-link dropdown-toggle waves-effect" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><strong><i class="fa fa-user-circle left"></i>&nbsp;{{ Auth::user()->name }}</strong></a>
                    <div class="dropdown-menu dropdown" aria-labelledby="dropdownMenu1">
                         <a class="dropdown-item waves-effect " href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                         <i class="fa fa-sign-out left"></i>&nbsp;Cerrar Sesion</a>
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                    </div>
                </li>
                        @endif
                    </ul>
    </div>
</nav>
           

        @yield('content')
    </div>

    <!-- Scripts -->
    
    <script type="text/javascript" src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>

    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="{{ asset('js/popper.min.js') }}"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}"></script>
     <script>
    new WOW().init();
    </script>

</body>
</html>
