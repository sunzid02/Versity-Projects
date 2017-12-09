<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;
use Illuminate\Support\Facades\DB;
use App\Linkinpark;
use Validator;

class BandController extends Controller
{
    //######## List of Bands #####################
    public function index( Request $request)
    {
      //
      $allBands = Band::all();// getting all the bands details from bands table

      //$allBands = DB::table('bands')->get();
      return view('band.index')->withAllBands($allBands);
    }

    //######## Insert a new band #####################
    public function create(Request $request)
    {

      # code...
      return view('band.create');
    }

    public function insert(Request $request)
    {
      # code...
      $validator = Validator::make($request->all(), [

                        'bandName' => 'required| unique:bands,bandName| min:3| alpha_dash| alpha_num'

            ]);

        if($validator->fails())
        {
            return redirect()->route('band.create',$request->concertNo)
                             ->with('errors',$validator->errors());
        }


      $band = new Band();
      $band->bandName = $request->bandName;
      $band->bandType = $request->bandType;
      $band->save();// data stored

      return redirect()->route('band.create');

    }

    //######## Edit Band #####################

    public function edit(Request $request, $bid)
    {
      # code...
      //$band = DB::table('bands')->where('bandId',$bid)->first();

      $band = Band::find($bid);
      return view('band.edit')->withBand($band);
    }

    //######## Update Band #####################

    public function update(Request $request)
    {
      $validator = Validator::make($request->all(), [

                        'bandName' => 'required'

            ]);

        if($validator->fails())
        {
            return redirect()->route('band.edit',$request->bandId)
                             ->with('errors',$validator->errors());
        }

      $id = $request->bandId;
      $band = Band::find($id);
      $band->bandId = $request->bandId;
      $band->bandName = $request->bandName;
      $band->bandType = $request->bandType;

      $band->save();
      $msg = $request->session()->flash('message', 'Updated 1 row');

      return redirect()->route('band.index') ;
    }
    //######## Delete Band #####################

    public function delete($id)
    {
      # Eloquent
      //$account = Account::find($id); // find ar vitor always primaryKey bola lagbe

      //QueryBuider
      $band = DB::table('bands')->where('bandId',$id)->first();

      return view('band.delete')->withBand($band);
    }

    //Confirmation for delete band

    public function destroy(Request $request)
    {
      # Eloquent
      //$account = Account::find($id); // find ar vitor always primaryKey bola lagbe

      //QueryBuider
      $id = $request->bandId;
      Band::destroy($id);

      return redirect()->route('band.index');
    }

    //######## linkinpark concert #####################
    public function lpconcert(Request $request)
    {
      # code...
      $lpConcert = Linkinpark::all();// getting all the linkinpart concert details from bands table

      return view('linkinpark.concert')->withLpConcert($lpConcert);
    }

}
