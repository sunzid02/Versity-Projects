<?php

namespace App\Http\Controllers;

use App\Band;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ReportController extends Controller
{
  public function index( Request $request)
  {
    //
    $allBands = Band::all();// getting all the bands details from bands table
    $bandT = "Rock";
    $bandT2 = "Metal";
    $allBands = DB::table('bands')->where('bandType',$bandT, $bandT2)->pluck();
    //return view('report.index')->withAllBands($allBands);

    // $bandT2 = "Folk";
    // $allBands2 = DB::table('bands')->where('bandType',$bandT2)->get();
    // return view('report.index')->withAllBands2($allBands2);

    var_dump($allBands);

  }
}
