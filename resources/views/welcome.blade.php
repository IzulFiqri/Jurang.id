<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Brand</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,700">
    <link rel="stylesheet" href="{{ asset('assets/css/aguilaraldo1_section_contact.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/Feature-Section-MD.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/Simple-Slider.css">
</head>

<body>
    <div class="simple-slider">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
                <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"></div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Jurang.id</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ url('/home') }}">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page lanidng-page">
        <section class="portfolio-block skills">
            <div class="container">
                <div class="heading">
                    <h2>Our features</h2>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-star-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Web Design</h3>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-lightbulb-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Interface Design</h3>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card special-skill-item border-0">
                            <div class="card-header bg-transparent border-0"><i class="icon ion-ios-gear-outline"></i></div>
                            <div class="card-body">
                                <h3 class="card-title">Photography and Print</h3>
                                <p class="card-text">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <section class="features">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Dirección / Contacto</h2>
                    <p>Morbi non mauris massa. Duis elit mauris, malesuada nec suscipit ac, bibendum sed augue. Maecenas condimentum magna gravida, laoreet nunc sed, euismod sem. </p>
                </div>
                <div class="col-md-6">
                    <div class="row icon-features">
                        <div class="col-4 icon-feature"><i class="fa fa-map-marker"></i>
                            <p>Dirección </p>
                            <p>lkjlkdjfsdfjsd pofpsdfjñklsdjkljd </p>
                        </div>
                        <div class="col-4 icon-feature"><i class="fa fa-phone"></i>
                            <p>Teléfono </p>
                            <p>6454875340 - 44095834985</p>
                        </div>
                        <div class="col-4 icon-feature"><i class="fa fa-envelope"></i>
                            <p>Correo </p>
                            <p>ejemplo@ejempl.com </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="{{ asset('assets/js/Simple-Slider.js')}}"></script>
    <script src="{{ asset('assets/js/theme.js')}}"></script>
</body>

</html>