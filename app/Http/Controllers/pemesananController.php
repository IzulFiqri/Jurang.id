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


class pemesananController extends Controller
{
    public function redir() {
    return view('viewFormPemesanan');

  }

}
