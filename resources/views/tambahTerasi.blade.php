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
    <div class="row justify-content-center">
        <div class="col-md-8 crd">
                <div class="card" id="post">
                    <div class="card-header">Tambah Terasi</div>
                    <div class="card-body">
                    <form enctype="multipart/form-data" class="form-horizontal" action="{{url('/insertTerasi')}}" method="POST">
                        {{ csrf_field() }}
                         <div class="form-group{{ $errors->has('foto') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Foto Barang</label>
                            <div class="col-md-12">
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputGroupFile01" name="foto" placeholder="foto" aria-describedby="inputGroupFileAddon01" required>
                                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                               </div>
                                @if ($errors->has('foto'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('foto') }}</strong>
                                </span>
                                @endif
                            </div>
                            </div>
                           </div> 

                            <div class="form-group{{ $errors->has('namaStock') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Nama Stock</label>
                            <div class="col-md-12">
                            <input type="text" class="form-control" name="namaStock" placeholder="Nama Stock" required/>
                            @if ($errors->has('namaStock'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('namaStock') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('beratStock') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Berat Stock</label>
                            <div class="col-md-12">
                            <div class="input-group">
                            <input type="text" class="form-control" name="beratStock" placeholder="Berat Stock" required/><div class="input-group-append"><span class="input-group-text">kg
                            </span></div></div>
                            @if ($errors->has('beratStock'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('beratStock') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('jumlahStock') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Jumlah Stock</label>
                            <div class="col-md-12">
                            <input type="text" class="form-control" name="jumlahStock" placeholder="Jumlah Stock" required />
                            @if ($errors->has('jumlahStock'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jumlahStock') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Harga</label>
                            <div class="col-md-12">
                            <input type="text" class="form-control" name="harga" placeholder="Harga" required/>
                            @if ($errors->has('harga'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('harga') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>
                            <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Tambah
                                </button>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
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
