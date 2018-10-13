<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>awal</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/css/aguilaraldo1_section_contact.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Feature-Section-MD.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Registration-Form-with-Photo.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Simple-Slider.css')}}">
</head>

<body>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Jurang.id</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/home') }}">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form method="post" action="{{ route('register') }}">
            @csrf
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="User Name" required autofocus></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><input class="form-control" type="password" name="password_confirmation" placeholder="Password (repeat)"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Sign Up</button></div><a href="#" class="already">You already have an account? Login here.</a></form>
        </div>
    </div>
<section class="features">
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
    
    <script src="{{ asset('ssets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/theme.js')}}"></script>
</body>

</html>