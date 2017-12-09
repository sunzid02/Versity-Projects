<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class LoginController extends Controller
{
    //
    public function index(Request $request)
    {

      return view('login.index');

      // $users = User::all(); //user table ar shob data niye asbe
      // $users = User::find(1); //user table a id jader 1 tader dekhabe
      // $users = User::where('username', 'admin')
      //               ->where('password','admin')
      //               ->first();
      //
      //
      // var_dump($users);
      // for further go to laravel/ retriving model

    }

    public function verify(Request $request)
    {
        //$un = $request->input('username'); duita same e
      $un = $request->username;
      $ps = $request->password;


      /*//Eloquent
      $verifyUser = User::where('username',$un)
                          ->where('password',$ps)
                          ->first();// using Eloquent. Elo per table one class
                          //queryBulider shob table er jnno one class*/

      //QueryBuider
        // $users = User::get(); //user table ar shob data niye asbe
      $verifyUser = DB::table('users')
                          ->where('username',$un)
                          ->where('password',$ps)
                          ->first();

      if ($verifyUser != null)
      {
        return redirect()->route('home.index');

      }
      else
      {
         $request->session()->flash('SessUsername',$un);
         $request->session()->flash('message','invalid username or password');
         return redirect()->route('login.index');
        //return view('login.index');
      }

    }
}
