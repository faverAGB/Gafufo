<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Material Design Bootstrap</title>

     <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">
     <link href="{{ asset('css/mdb.css') }}" rel="stylesheet">
       <link rel="stylesheet" href="{{ asset('css/font-awesome.css') }}" type="text/css">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/
        
        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #2b3f66;
        }
        
        footer.page-footer {
            background-color: #2b3f66;
            margin-top: 0;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #2b3f66;
            }
        }
        /* Carousel*/
        
        .carousel,
        .carousel-item,
        .active {
            height: 100%;
        }
        
        .carousel-inner {
            height: 100%;
        }
        /*Caption*/
        
        .flex-center {
            color: #fff;
        }
        
        @media (min-width: 776px) {
            .carousel .view ul li {
                display: inline;
            }
            .carousel .view .full-bg-img ul li .flex-item {
                margin-bottom: 1.5rem;
            }
        }
        .navbar .btn-group .dropdown-menu a:hover {
            color: #000 !important;
        }
        .navbar .btn-group .dropdown-menu a:active {
            color: #fff !important;
        }
    </style>

</head>

<body>

    <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
            <div class="container">
                <a class="navbar-brand" href="#">
                     {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <ul class="navbar-nav mr-auto">
        </ul>
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
            </div>
        </nav>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-3" data-slide-to="1"></li>
            <li data-target="#carousel-example-3" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img (43).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="h1-responsive flex-item font-bold">Gafufo</h1>
                            <li>
                                <p class="flex-item">The most powerful and free UI KIT for Bootstrap</p>
                            </li>
                            <li>
                                <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-primary btn-lg flex-item" rel="nofollow">Sign up!</a>
                            </li>
                            <li>
                                <a target="_blank" href="https://mdbootstrap.com/material-design-for-bootstrap/" class="btn btn-secondary btn-lg flex-item" rel="nofollow">Learn more</a>
                            </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.First slide -->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/img%20(40).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="h1-responsive">Lots of tutorials at your disposal</h1>
                        </li>
                        <li>
                            <p class="my-4">And all of them are FREE!</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-primary btn-lg" rel="nofollow">Start learning</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Horizontal/Nature/full%20page/img%20(24).jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeInUp col-md-12">
                        <li>
                            <h1 class="h1-responsive">Visit our support forum</h1></li>
                        <li>
                            <p class="my-4">Our community can help you with any question</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/" class="btn btn-default btn-lg" rel="nofollow">Support forum</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!-- /.Third slide -->
            
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    
    <!--/.Main layout-->

  


    <!-- SCRIPTS -->

    <!-- JQuery -->

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