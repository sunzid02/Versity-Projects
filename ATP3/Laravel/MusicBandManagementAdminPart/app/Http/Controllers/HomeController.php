<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Admin;
use Illuminate\Http\Request;
use App\Band;

class HomeController extends Controller
{
    //
    public function index(Request $request)
    {
      # code...
      //$an = $request->adminNameD;
    	//$allBands = Band::all();
      if($request->session()->has('username'))
      {
        date_default_timezone_set('Asia/Dhaka');
        $lastLogin = date('d-m-Y H:i:s');
        return view('home.index')->withLastlogin($lastLogin);
      }
      else
      {
        $request->session()->flash('message', 'You are not logged in......');
        return redirect()->route('login.index');
      }

    }
}
