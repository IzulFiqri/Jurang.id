<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profil;
use Auth;
use Illuminate\Support\Facades\Validator;
use Redirect;

class profilController extends Controller
{
  public function redir() {
    $view = profil::where('iduser',Auth::user()->id)->first();
    //dd($view);
    return view('viewprofil',compact('view'));
  }

  public function validator(Request $request){
    $rules = [
      'nama' => 'required|string',
      'nomortelepon' => 'required|digits_between:10,13',
      'alamat' => 'required|string',
    ];
    return Validator::make($request->all(), $rules);
}

public function updateProfile(Request $request){
    $edit = profil::all()->where('iduser',Auth::user()->id)->first();
    $validator = $this->validator($request);
    if($validator->passes())
    {
        $edit->nama = $request->nama;
        $edit->alamat = $request->alamat;
        $edit->nomortelepon = $request->nomortelepon;
        //dd($edit);
        $edit->update();
        return Redirect::back();
    }
    else
    {
        return Redirect::back()
            ->withErrors($validator)
            ->withInput();
    }
  }

}
