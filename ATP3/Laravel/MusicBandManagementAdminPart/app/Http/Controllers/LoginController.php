<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Admin;

class LoginController extends Controller
{
    //################# Login ##########################

    public function index(Request $request)
    {
      # checking database connection
       if(DB::connection()->getDatabaseName())
       {
         echo "connected successfully to database ".DB::connection()->getDatabaseName();
       }

       $db = DB::connection()->getDatabaseName();
      return view('login.index')->withDb($db);
    }

    public function verify(Request $request)
    {
      # code...
      $adminName = $request->username;
      $adminPass = $request->password;

      $adminVerify = Admin::where('adminName', $adminName)
                            ->where('adminPassword', $adminPass)
                            ->first();
      $adminNameD = Admin::where('adminName',$adminName);

      if($adminVerify != null)
      {

        $request->session()->put('username',$adminName);
        //$name = $request->session()->get('username');
        return redirect()->route('home.index');

      }
      else
      {
         $request->session()->flash('SessUsername',$adminName);
         $request->session()->flash('message', 'username or password is incorrect');
         return redirect()->route('login.index');
      }

    }
}
