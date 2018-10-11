<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Auth;
use App\modelPemesanan;
use App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Redirect;
use App\modelBarang;


class pemesananController extends Controller
{
    public function redir($id) {
    $view = DB::table('stock')
            ->select('stock.*')
            ->where('stock.idStock','=',$id)
            ->first();
    //dd($view);
    return view('viewFormPemesanan',compact('view'));

  }
    public function insertPemesanan(Request $request, $id){
    $validator = $this->validator($request);
    if($validator->passes())
    {
      
    $insert = ([
          'namaPemesan' => $request->namaPemesan,
          'jumlahPesanan' => $request->jumlahPesanan,
    	  'noTelponPemesanan' => $request->noTelponPemesanan,
    	  'alamatPemesan' => $request->alamatPemesan,
          'alamatPengiriman' => $request->alamatPengiriman,
    	   'idStock' => $id,
         'iduser' => Auth::user()->id,
    	]);

    $edit = modelBarang::find($id);
    $edit->jumlahStock = $edit->beratStock - $request->jumlahPesanan;
    $edit->save();

          modelPemesanan::create($insert);

          return redirect('viewPemesanan');
        
    }


    else
    {
        return Redirect::back()
            ->withErrors($validator)
            ->withInput();
    }
  }

  public function getViewPemesanan(){
    $view = DB::table('pemesanan')
            ->join('users', 'pemesanan.iduser', '=', 'users.id')
            ->join('stock', 'pemesanan.idStock', '=', 'stock.idStock')
            ->select('pemesanan.*', 'stock.*', 'users.*', DB::raw('jumlahPesanan*harga as total'))
            ->where('pemesanan.iduser','=',Auth::user()->id)
            ->get();
    //dd($view);
    return view('viewPemesanan', compact('view'));
  }

	public function validator(Request $request){
    $rules = [
      'namaPemesan' => 'required|string',
      'jumlahPesanan' => 'required|integer',
      'noTelponPemesanan' => 'required|string',
      'alamatPemesan' => 'required|string',
      'alamatPengiriman' => 'required|string',
    ];
    return Validator::make($request->all(), $rules);
}

    public function viewPemesanan(Request $request){
        $view = DB::table('pemesanan')
            ->join('users', 'pemesanan.iduser', '=', 'users.id')
            ->join('stock', 'pemesanan.idStock', '=', 'stock.idStock')
            ->select('pemesanan.*', 'stock.*', 'users.*', DB::raw('jumlahPesanan*harga as total'))
            ->get();
        
        return view('viewPemesanan',compact('view'));
  }

}


