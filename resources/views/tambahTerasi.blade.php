@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Terasi</div>

                <div class="panel-body">
                    <form class="form-horizontal" action="{{url('/insertTerasi')}}" method="POST">
                        {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('jumlahStock') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Jumlah Stock</label>
                            <div class="col-md-6">
                            <input type="text" class="form-control" name="jumlahStock" placeholder="Jumlah Stock" />
                            @if ($errors->has('jumlahStock'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('jumlahStock') }}</strong>
                                </span>
                            @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('harga') ? ' has-error' : '' }}">
                            <label for="text" class="col-md-4 control-label">Harga</label>
                            <div class="col-md-6">
                            <input type="text" class="form-control" name="harga" placeholder="Harga"/>
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
