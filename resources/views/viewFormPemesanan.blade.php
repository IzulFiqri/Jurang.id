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
<div class="container">
    <div class="row justify-content-center">
                <div class="col-md-8 crd">
                    <div class="card">
                    <div class="card-header">Form Pemesanan</div>
                    
                    <div class="card-body">
                        <form class="form-horizontal" action="{{url('/insertForm/'.$view->idStock)}}" method="POST">
                        {{csrf_field()}}
                            <div class="form-group{{ $errors->has('namaPemesan') ? ' has-error' : '' }} row">
                            <label for="text" class="col-md-4 control-label">Nama Pemesan</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="namaPemesan" placeholder="Nama Pemesan" required/>
                            @if ($errors->has('namaPemesan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('namaPemesan') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('jumlahPesanan') ? ' has-error' : '' }} row">
                            <label for="text" class="col-md-4 control-label">Jumlah Pesanan</label>
                            <div class="col-md-8">
                            <div class="input-group">
                            <input type="number" min="1" max="{{$view->beratStock}}" class="form-control" name="jumlahPesanan" placeholder="Jumlah Pesanan" required />
                            <div class="input-group-append"><span class="input-group-text">kg
                            </span></div></div>
                            @if ($errors->has('jumlahPesanan'))
                                <span class="help-block">
                                    <strong>{{$errors->first('jumlahPesanan')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('noTelponPemesanan') ? ' has-error' : '' }} row">
                            <label for="text" class="col-md-4 control-label">No Telpon Pemesanan</label>
                            <div class="col-md-8">
                            <input type="number" class="form-control" name="noTelponPemesanan" placeholder="No Telpon Pemesanan" required/>
                            @if ($errors->has('noTelponPemesanan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('noTelponPemesanan') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('alamatPemesan') ? ' has-error' : '' }} row">
                            <label for="text" class="col-md-4 control-label">Alamat Pemesan</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="alamatPemesan" placeholder="Alamat Pemesan" required/>
                            @if ($errors->has('alamatPemesan'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('alamatPemesan') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('alamatPengiriman') ? ' has-error' : '' }} row">
                            <label for="text" class="col-md-4 control-label">Alamat Pengiriman</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="alamatPengiriman" placeholder="Alamat Pengiriman" required/>
                            @if ($errors->has('alamatPengiriman'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('alamatPengiriman') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <button type="submit" class="btn btn-block btn-primary justify-content-center">
                                    Pesan
                                </button>
                            </div>
                            </div>
                            </form>
                </div>
            </div>
    </div>
</div>
</div>
</div>
@endsection
