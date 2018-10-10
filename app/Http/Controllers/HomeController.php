<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\modelBarang;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    
    public function dashboard(){
    if (Auth::User()->level=='1') {
//  $redirectTo = '/dashboardAgen';  // code...

  $tampil= modelBarang::where('posthome',1)->get();
  return view('homeadmin', compact('tampil'));
}else if(Auth::User()->level=='2') {
  $tampil= modelBarang::where('posthome',1)->get();
  return view('homeuser', compact('tampil'));
  }
  else if(Auth::User()->level=='3') {
    //$redirectTo = '/dashboardPengusaha';
    return view ('dashboardAdmin');
    }
  }
}
