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
                        <td class="text-center text-nowrap">Edit</td>
                        <td class="text-center text-nowrap">Hapus</td>
  										</tr>
                    @foreach($tampil as $data)
										<tr>
											<td class="text-center text-nowrap">{{$data->jumlahStock}}</td>
											<td class="text-center text-nowrap">{{$data->harga}}</td>
                      <td class="text-center text-nowrap"><a href="{{url('/editTerasi/'.$data->idStock )}}">Edit</a></td>
                      <td class="text-center text-nowrap"><a href="{{url('/hapusTerasi/'.$data->idStock )}}">Hapus</a></td>
										</tr>
										@endforeach
                  </table>
                  <a href="{{url('/tambahTerasi')}}" class="btn btn-primary">Tambah Stok</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
