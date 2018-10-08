<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Auth;
use App\modelBarang;
use App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Redirect;

class terasiController extends Controller
{
  public function redir() {
  return view('tambahTerasi');
  }

  public function insertTerasi(Request $request){
    $validator = $this->validator($request);
    if($validator->passes())
    {
    $insert = ([
          'foto' => $request->foto,
          'namaStock' => $request->namaStock,
          'beratStock' => $request->beratStock,
    			'jumlahStock' => $request->jumlahStock,
    			'harga' => $request->harga,
    			]);
          modelBarang::create($insert);
          return redirect('viewTerasi');
    }
    else
    {
        return Redirect::back()
            ->withErrors($validator)
            ->withInput();
    }

}

public function validator(Request $request)
{
    $rules = [
      'foto' => 'required|string',
      'namaStock' => 'required|string',
      'beratStock' => 'required|string',
      'jumlahStock' => 'required|integer',
      'harga' => 'required|integer',
    ];
    return Validator::make($request->all(), $rules);
}


  public function viewBarang(Request $request){
        $tampil= modelBarang::all();
        return view('viewTerasi',compact('tampil'));
  }

  public function viewBarangUser(Request $request){
        $tampil= modelBarang::all();
        return view('viewTerasim',compact('tampil'));
  }

  public function geteditBarang($id){
        $edit= modelBarang::find($id);
        return view('editTerasi',compact('edit'));
  }

  public function hapusBarang($id){
        $edit= modelBarang::find($id);
        $edit->delete();
        return redirect('viewTerasi');
  }

  public function editBarang(Request $request, $id){
    $edit=modelBarang::find($id);
    $validator = $this->validator($request);
    if($validator->passes())
    {
      $edit->jumlahStock= $request->jumlahStock;
      $edit->harga= $request->harga;
      $edit->save();
      return redirect('viewTerasi');
    }
    else
    {
        return Redirect::back()
            ->withErrors($validator)
            ->withInput();
    }

  }
}
