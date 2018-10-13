@extends('layouts.app')
@section('js')
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script type="text/javascript">
$(document).ready(function() {
$( ".form-control" ).prop( "disabled", true );
$('#btnupdate').hide();
});
$("#confirmedit").click(function(){
    $('#btnupdate').show();
    $('#confirmedit').hide();
    $( ".form-control" ).prop( "disabled", false );
  });
</script>
@endsection
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
                    <div class="card-header">Detail Profil</div>
                    
                    <div class="card-body">
                        <form class="form-horizontal" action="{{url('/updateProfil')}}" method="POST">
                        {{csrf_field()}}
                            <div class="form-group{{ $errors->has('nama') ? ' has-error' : '' }} row">
                            <label for="text" class="col-md-4 control-label">Nama Lengkap</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="nama" placeholder="Nama Pemesan" value="{{$view->nama}}" required/>
                            @if ($errors->has('nama'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nama') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }} row">
                            <label for="text" class="col-md-4 control-label">Alamat</label>
                            <div class="col-md-8">
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="{{$view->alamat}}" required/>
                            @if ($errors->has('alamat'))
                                <span class="help-block">
                                    <strong>{{$errors->first('alamat')}}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('nomortelepon') ? ' has-error' : '' }} row">
                            <label for="text" class="col-md-4 control-label">No Telpon</label>
                            <div class="col-md-8">
                            <input type="number" min="0" class="form-control" name="nomortelepon" placeholder="Nomor Telepon" value="{{$view->nomortelepon}}" required/>
                            @if ($errors->has('nomortelepon'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('nomortelepon') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('pointqu') ? ' has-error' : '' }} row">
                            <label for="text" class="col-md-4 control-label">Pointqu</label>
                            <div class="col-md-8">
                            <input type="number" class="form-control" name="pointqu" placeholder="Pointqu" value="{{$view->pointqu}}" readonly/>
                            @if ($errors->has('pointqu'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('pointqu') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>


                            <div class="form-group row">
                            <div class="col-md-6 offset-md-3">
                                <input type="button" id="confirmedit" class="btn btn-block btn-danger" value="Edit"/>
                                <button type="button" class="btn btn-block btn-primary" id="btnupdate" data-toggle="modal" data-target="#modalEdit">
                                    Update
                                </button>
                            </div>
                            </div>

                            <div class="modal fade" id="modalEdit" role="dialog">
                                  <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title">Konfirmasi Update</h4>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    
                                  </div>
                                  <div class="modal-body">
                                    <p>Anda akan menyimpan data yang telah diedit. Lanjutkan?</p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button> <button class="btn btn-danger" type="submit">Simpan</button>
                                  </div>
                                </div>
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
