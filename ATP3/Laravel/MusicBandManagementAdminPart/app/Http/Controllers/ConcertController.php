<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Band;
use Illuminate\Support\Facades\DB;
use App\Linkinpark;
use App\Bandconcert;
use App\Http\Requests\concertRequests;
use Validator;


class ConcertController extends Controller
{
    //
    public function create(Request $request,$bandName)
    {
      # code...
      $bn = $bandName;
      return view('concert.create')->withBandName($bn);
    }

    public function insert(Request $request)
    {
      $validator = Validator::make($request->all(), [

                        'concertName' => 'required| unique:bandconcerts,concertNo',
                        'concertDateTime' => 'required|date|after:start_date',
                        'concertVenue' => 'required| alpha_dash',
                        'ticketQuantity' => 'required | numeric',
                        'perTicketPrice' => 'required | numeric',

            ]);

        if($validator->fails())
        {
            return redirect()->route('concert.edit',$request->concertNo)
                             ->with('errors',$validator->errors());
        }

      $crt = new Bandconcert();
      $crt->bandName = $request->bandName;
      $crt->concertName = $request->concertName;

      //date_default_timezone_set('Asia/Dhaka');



      $crt->concertDateTime = $request->concertDateTime;
      $crt->concertVenue = $request->concertVenue;
      $crt->ticketQuantity = $request->ticketQuantity;
      $crt->perTicketPrice = $request->perTicketPrice;
      $crt->save();

      return redirect()->route('band.index');
    }

    //######## Edit Concert #####################

    public function edit($concertNo)
    {
      # code...
      //$band = DB::table('bands')->where('bandId',$bid)->first();
      $concertNo = Bandconcert::find($concertNo);
      return view('concert.edit')->withConcertNo($concertNo);
    }

    //######## Update Band #####################

    public function update(Request $request)
    {
      $validator = Validator::make($request->all(), [

                        'concertName' => 'required| unique:bandconcerts,concertNo',
                        'concertVenue' => 'required| alpha_dash',
                        'ticketQuantity' => 'required | numeric',
                        'perTicketPrice' => 'required | numeric',

            ]);

        if($validator->fails())
        {
            return redirect()->route('concert.edit',$request->concertNo)
                             ->with('errors',$validator->errors());
        }
        /*<label>

          @if($errors->any())
            @foreach($errors->all() as $errs)
              <p style="color:Red;"> {{$errs}}</p>
            @endforeach
          @endif

        </label>*/

      $cn = $request->concertNo;
      $band = Bandconcert::find($cn);

      $band->bandName = $request->bandName;
      $band->concertNo = $request->concertNo;
      $band->concertName = $request->concertName;
      //$band->concertDateTime = $request->concertDateTime;
      $band->concertVenue = $request->concertVenue;
      $band->ticketQuantity = $request->ticketQuantity;
      $band->perTicketPrice = $request->perTicketPrice;

      $band->save();
      $msg = $request->session()->flash('message', 'Updated 1 row');

      return redirect()->route('band.lpconcert');
    }

    //######## Delete concert #####################

    public function delete($id)
    {
      # Eloquent
      //$account = Account::find($id); // find ar vitor always primaryKey bola lagbe

      //QueryBuider
      $cons = DB::table('bandconcerts')->where('concertNo',$id)->first();

      return view('concert.delete')->withCons($cons);
    }

    //Confirmation for delete band

    public function destroy(Request $request)
    {
      # Eloquent
      //$account = Account::find($id); // find ar vitor always primaryKey bola lagbe

      //QueryBuider
      $id = $request->consNo;
      Bandconcert::destroy($id);

      return redirect()->route('band.lpconcert');
    }

    //######## linkinpark concert #####################
    public function lpconcert(Request $request)
    {
      # code...
      $lpConcert = Linkinpark::all();// getting all the linkinpart concert details from bands table

      return view('linkinpark.concert')->withLpConcert($lpConcert);
    }

}
