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

}


</style>
@endsection
@section('content')
<div class="jnc">
<div class="container justify-content-center">
<div class="row">

<div class="col-md-9 crd">
            <div class="card">
                <div class="card-header">Data Pemesanan</div>
                <div class="card-body">
                @if(count($view)>0)
                    <table class="table table-stripped table-bordered">
                      <tr style='font-weight:bold;'>
                        <td class="text-center text-nowrap">Nama Pemesan</td>
                        <td class="text-center text-nowrap">Nama Stok Dipesan</td>
                        <td class="text-center text-nowrap">Jumlah yang Dipesan</td>
                        <td class="text-center text-nowrap">Total harus dibayar</td>
                      </tr>
                @foreach($view as $display)
                    <tr>
                        <td class="text-center text-nowrap">{{$display->namaPemesan}}</td>
                        <td class="text-center text-nowrap">{{$display->namaStock}}</td>
                        <td class="text-center text-nowrap">{{$display->jumlahPesanan}} kg</td>
                        <td class="text-center text-nowrap">{{$display->total}}</td>
                      </tr>
                @endforeach
                    </table>
                @else
                Anda belum membeli apapun.
                @endif
                </div>
            </div>
        </div>

<div class="col-md-3 crd">
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