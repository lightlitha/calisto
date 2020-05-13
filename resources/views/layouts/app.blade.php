<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ Voyager::setting("admin.title") }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/css/mdb.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <html lang="en" class="full-height">

<!--Main Navigation-->
<header>

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar shadow-sm" style="background: rgba(0,0,0,0.8); height:50px;">
    <a class="navbar-brand" href="{{ url('/') }}">
        <?php $admin_logo_img = Voyager::setting('admin.icon_image', ''); ?>
            @if($admin_logo_img == '')
            <img class="img-responsive pull-left flip logo hidden-xs animated fadeIn" src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon" style="width: 40px; border-radius:50%;">
        @else
            <img class="img-responsive pull-left flip logo hidden-xs animated fadeIn" src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon" style="width: 40px; border-radius:50%;">
        @endif
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/about') }}">About</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ url('/rates') }}">Rates</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/contact') }}">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item">
                    <a class="nav-link" href="#" role="button">
                        <i class="fa fa-bell"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        <img src="#" alt="Profile Picture" style="width: 25px; border-radius:50%;" />
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" onclick="">
                            Private Session
                        </a>
                        <a class="dropdown-item" href="#" onclick="">
                            Account
                        </a>
                        <a class="dropdown-item" href="#" onclick="">
                            Settings
                        </a>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
  </nav>
        <main>
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="page-footer font-small pt-4" style="background: rgba(0,0,0,0.9);">
            <!-- Footer Links -->
            <div class="container text-center text-md-left">
            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">CaliSmokin Bodies</h6>
                <p>Consulatu assueverit sit ne. Nec modus aperiri te, verear qualisque posidonium et pri, 
                    ius constituto eloquentiam an.</p>
                </div>
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                <p>
                    <a href="#!">Weights</a>
                </p>
                <p>
                    <a href="#!">Gym Carpets</a>
                </p>
                <p>
                    <a href="#!">Gym Gloves</a>
                </p>
                <p>
                    <a href="#!">Gym Equipment</a>
                </p>
                </div>
                <!-- Grid column -->
        
                <hr class="w-100 clearfix d-md-none">
        
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Follow Us !</h6>
                <p>
                    <a href="#!">Facebook</a>
                </p>
                <p>
                    <a href="#!">Twitter</a>
                </p>
                <p>
                    <a href="#!">Google+</a>
                </p>
                <p>
                    <a href="#!">Linkdin</a>
                </p>
                </div>
        
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">
        
                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>
                    <i class="fas fa-home mr-3"></i> Durban, DBN 3001, RSA</p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> info@calismokinbodies.com</p>
                <p>
                    <i class="fas fa-phone mr-3"></i> + 27 234 567 88</p>
                <p>
                    <i class="fas fa-print mr-3"></i> + 27 234 567 89</p>
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Footer links -->
        
            <hr>
        
            <!-- Grid row -->
            <div class="row d-flex align-items-center">
        
                <!-- Grid column -->
                <div class="col-md-7 col-lg-8">
        
                <!--Copyright-->
                <p class="text-center text-md-left">© 2020 Copyright:
                    <a href="#">
                    <strong> calismokinbodies.com</strong>
                    </a>
                </p>
        
                </div>
                <!-- Grid column -->
        
                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0">
        
                <!-- Social buttons -->
                <div class="text-center text-md-right">
                    <ul class="list-unstyled list-inline">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-facebook-f"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-twitter"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-google-plus-g"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-sm rgba-white-slight mx-1">
                        <i class="fab fa-linkedin-in"></i>
                        </a>
                    </li>
                    </ul>
                </div>
        
                </div>
                <!-- Grid column -->
        
            </div>
            <!-- Grid row -->
        
            </div>
            <!-- Footer Links -->
        
        </footer>
        <!-- Footer -->
    </div>
</body>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.16.0/js/mdb.min.js"></script>
</html>