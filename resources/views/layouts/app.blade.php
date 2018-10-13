<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->

    <!-- Styles -->
    @yield('head')
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="/">Jurang.id</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">

                    <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ url('/home') }}">Home</a></li>
                    @guest
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                    @else
                    @if(Auth::check())
                    @if(Auth::User()->level==1)
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/viewTerasi') }}">Data Stok</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/viewPemesanan/admin') }}">Data Pemesanan</a></li>
                    @else
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/viewPemesanan') }}">Data Pemesanan</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/viewTerasim') }}">Data Stok</a></li>
                    @endif
                    
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Konfirmasi Pembayaran</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Pengiriman</a></li>
                    @endif
                    <li class="nav-item dropdown" role="presentation">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/profil') }}">Profil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
        </div>
    </nav>
    <!-- <div id="app"> -->
        <!-- <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    
                    <ul class="navbar-nav ml-auto">
                        
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                        @if(Auth::User()->level==1)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/viewTerasi') }}">Data Stok</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Data Pemesanan</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Konfirmasi Pembayaran</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Pengiriman</a>
                            </li>
                        @endif
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('/profil') }}">Profil</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();">
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
            </div>
        </nav> -->

<!--         <main class="py-4"> -->
            @yield('content')
<!--         </main> -->
    <!-- </div> -->
<section class="features mboh">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>PPL Kelompok D</h2>
                    <p>Nengah Adinda (PM)<br>Ramadhany Aisyah (Analyst) | 
                    Ayu Puji (Designer)<br>Refardo Gelora (Programmer) | M Izul (Tester)</p>
                    <p>Universitas Jember © 2018</p>
                </div>
                <div class="col-md-6">
                    <div class="row icon-features">
                        <div class="col-4 icon-feature"><i class="fa fa-map-marker"></i>
                            <p>Alamat</p>
                            <p>Jl. Kalimantan No. 37<br>
                            Kampus Tegalboto Kabupaten Jember</p>
                        </div>
                        <div class="col-4 icon-feature"><i class="fa fa-phone"></i>
                            <p>Nomor Telepon</p>
                            <p>+62 877-5755-4527<br>
                            +62 838-5101-6003</p>
                        </div>
                        <div class="col-4 icon-feature"><i class="fa fa-envelope"></i>
                            <p>E-Mail</p>
                            <p>162410101056@students.unej.ac.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('js')
</body>
</html>
