@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Daftar Stock</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-stripped table-bordered">
                      <tr style='font-weight:bold;'>
  											<td class="text-center text-nowrap">Jumlah Stock</td>
  											<td class="text-center text-nowrap">Harga</td>
  										</tr>
                    @foreach($tampil as $data)
										<tr>
											<td class="text-center text-nowrap">{{$data->jumlahStock}}</td>
											<td class="text-center text-nowrap">{{$data->harga}}</td>
										</tr>
										@endforeach
                  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
