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
                <div class="card konten" id="post">
                    <div class="card-header"><strong><h2>Daftar Stock</h2></strong></div>
                    <div class="card-body">
                    <div class="row">
                        <table class="table table-stripped">
                        <tr style='font-weight:bold;'>
                            <td class="text-center text-nowrap">Nama Stock</td>
                            <td class="text-center text-nowrap">Berat Stock</td>
                            <td class="text-center text-nowrap">Harga</td>
                        </tr>

                        @foreach($tampil as $data)
                        @if($data->posthome==1)
                        <tr>
                            <td class="text-center text-nowrap">{{$data->namaStock}}</td>
                            <td class="text-center text-nowrap">{{$data->beratStock}} kg</td>
                            <td class="text-center text-nowrap">{{$data->harga}}</td>
                            <td class="text-center text-nowrap"><a href="{{url('/viewFormPemesanan/'.$data->idStock)}}" class="btn btn-sm btn-primary">Pesan Sekarang</a></td>
                        </tr>
                        @endif
                        @endforeach
                        </table>
                    </div>
                    <br>
                
                    </div>

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
