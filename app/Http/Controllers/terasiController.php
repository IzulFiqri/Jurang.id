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
      // dd($request->file('foto'));
      $fileName   = $request->file('foto')->getClientOriginalName();
      $request->file('foto')->move("image/", $fileName);
    $insert = ([
          'foto' => $request->file('foto')->getClientOriginalName(),
          'namaStock' => $request->namaStock,
          'beratStock' => $request->beratStock,
    			'harga' => $request->harga,
          'posthome' => 0,
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
      'foto' => 'required',
      'namaStock' => 'required|string',
      'beratStock' => 'required|integer',
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
      $fileName   = $request->file('foto')->getClientOriginalName();
      $request->file('foto')->move("image/", $fileName);
      $edit->foto= $request->file('foto')->getClientOriginalName();
      $edit->namaStock= $request->namaStock;
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

  public function postBarang(Request $request, $id){
    $post=modelBarang::find($id);
      $post->posthome= 1;
      $post->save();
      return redirect('home');
    }

    public function batalpostBarang(Request $request, $id){
    $post=modelBarang::find($id);
      $post->posthome= 0;
      $post->save();
      return redirect('home');
    }
}
