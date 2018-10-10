@section('head')
<link rel="stylesheet" href="{{ asset('assets/css/aguilaraldo1_section_contact.css')}}">
<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css')}}">
<style type="text/css">
.mboh{
bottom:0px;


}

.jnc{
height: 1000px;
background: #475d62 url(../../assets/img/star-sky.jpg);
background-size: auto auto;
background-size: cover;
position: relative;
}
.crd{
/*transform: translate(-50%, -50%);
position: absolute;*/
/*top: 50%;
left: 50%;*/
/*margin:25% auto;*/
margin-top:20%;
}
.yte {
  position: relative;
  overflow: hidden;
}
.ye {
  position: absolute;
  opacity: 0;
  font-size:150px;
  right: 0;
  top: 0;
}

.jnc{
height: 1000px;
background: #475d62 url(../../assets/img/star-sky.jpg);
background-size: auto auto;
background-size: cover;
position: relative;

}

.konten{
    width: 650px;
    margin-left: 50px;

}


</style>
@endsection
@extends('layouts.app')
@section('content')
<nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-white portfolio-navbar gradient">
        <div class="container"><a class="navbar-brand logo" href="#">Jurang.id</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                id="navbarNav">
                <ul class="nav navbar-nav ml-auto">

                    <li class="nav-item" role="presentation"><a class="nav-link active" href="{{ url('/home') }}">Home</a></li>
                    @guest
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/login') }}">Login</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/register') }}">Register</a></li>
                    @else
                    @if(Auth::User()->level==2)
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/viewTerasim') }}">Data Stok</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="{{ url('/') }}">Data Pemesanan</a></li>
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






<div class="jnc">
<div class="container">
    <div class="row" >
        <div class="col-md-8 col-md-offset-2"style="margin-top: 200px; margin-left: 200px;">
            <div class="panel panel-default">
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
</div>
<section class="features mboh">
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
@endsection
