@extends('layouts.app')
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
    margin-bottom:5%;
}


</style>
@endsection
@section('content')
<div class="jnc">
<div class="container justify-content-center">
<div class="row">
        <div class="col-md-8 crd">
            <div class="row">
            @foreach($tampil as $data)
                    <div class="card konten" id="post">
                        <div class="card-header">{{$data->namaStock}}</div>
                        <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="/image/{{$data->foto}}" class="card-img" style="width:auto; margin-right: 20px;height:100px;">
                            </div>
                            <div class="col-md-8">
                                <p class="card-text">Nama Stock : {{$data->namaStock}}</p>
                                <p class="card-text">Berat : {{$data->beratStock}} kg</p>
                                <p class="card-text">Harga : {{$data->harga}}</p>
                            </div>

                        </div>
                    </div>
                    <div class="card-footer">
                    @if($data->beratStock>0)
                             <a href="{{url('/viewFormPemesanan/'.$data->idStock)}}" class="float-right btn btn-primary">Pesan Sekarang</a>
                    @else
                    <a href="" class="float-right btn btn-danger">Stok Kosong</a>
                    @endif
                             </div>
                    </div>
            @endforeach
        
            </div>
        </div>
        <div class="col-md-4 crd">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   <h1> You are logged in as {{ Auth::user()->name }}! <h1>
                </div>
            </div>
        </div>
</div>
</div>
</div>
@endsection
