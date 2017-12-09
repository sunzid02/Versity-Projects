<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Account;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\AccountRequest;

class AccountController extends Controller
{
//................... all accounts number will be showed here
    public function index()
    {
      # code...Eloquent
      //$accounts = Account::all(); //accounts table ar all data are taken

      //QueryBuider
      $accounts = DB::table('accounts')->join('accounttype', 'accounts.typeId','=','accounttype.typeId')->get();
      return view('account.index')->withAccounts($accounts);
    }

//........................... A specific account details will show here
    public function details($id)
    {
      # Eloquent
      //$account = Account::find($id); // find ar vitor always primaryKey bola lagbe

      //QueryBuider
      $account = DB::table('accounts')->where('accId',$id)->first();

      return view('account.details')->withAccount($account);
    }

    //create account
    public function create()
    {
      # code...
      return view('account.create');
    }

/*####################################################################################################################################################################################*/

/*....................VALIDATION PROCEDURE...............................................................................*/

    # code...
          /*
                  Validator::make( asdasd,[] );
          First parameter a kon kon data validate korbo,
          Ar second parameter a amar rules ki ki datagulo
          ke validate korarr

          2nd parameter hobe akta associative array.
            Eikhane 'key' te form theke asha variable ar naam
            'value ' thakbe amar deya rule.
              'accountNo'=> 'required', akhon jodi aro rule thake tahole
              '|' symbol use kora lagbe

              'accountNo'=> 'required|size'

          */

                  /*Validator::make($request->all(),[
                  'accountNo'=> 'required|unique:accounts,accNo',//accounts table a accNo col a value ta unique ta check kore
                  'accountName' => 'required|min:3|max:35',
                  'initialBalance' => 'required|numeric'

                ])->validate();*/
        //............................................Validation....Procedure 1.....................................................................

        /*Validator::make($request->all(),[
            'accountNo'=> 'required|unique:accounts,accNo',//accounts table a accNo col a value ta unique ta check kore
            'accountName' => 'required|min:3|max:35',
            'initialBalance' => 'required|numeric'
          ])->validate();*/

          //............................................Validation....Procedure 2.....................................................................

            /* $validator = Validator::make($request->all(),[
              'accountNo'=> 'required|unique:accounts,accNo',//accounts table a accNo column a value ta unique ta check kore
              'accountName' => 'required|min:3|max:35',
              'initialBalance' => 'required|numeric'
            ]);

              if ($validator->fails()) {
                    # code...
                      return redirect()->route('account.create')->withErrors($validator->errors());
                    //return redirect()->back()->withErrors($validator->errors())->withInput();
                  }*/
      //......................................Validation..........Procedure 3.....................................................................


            /*$this->validate($request,[
              'accountNo'=> 'required|unique:accounts,accNo',//accounts table a accNo column a value ta unique ta check kore
              'accountName' => 'required|min:3|max:35',
              'initialBalance' => 'required|numeric'
            ]);*/

/*.......................................Validation Procedure Ends....................................................*/


/*####################################################################################################################################################################################*/

    //  insert data to new account

    public function store(AccountRequest $request)
    {
        //......................................Validation..........Procedure 4.....................................................................
        //create a Request for validation
        $acc = new Account();
        $acc->accNo = $request->accountNo;
        $acc->accName = $request->accountName;
        $acc->balance = $request->initialBalance;

        date_default_timezone_set('Asia/Dhaka');
        $acc->lastTransaction = date('Y-m-d H:i:s');
        $acc->save();
        return redirect()->route('account.index');
      //return redirect()->route('account.details', $acc->accId);
    }

//EDIT Account...................................................................................................

    public function edit($id)
    {
      # Eloquent
      //$account = Account::find($id); // find ar vitor always primaryKey bola lagbe

      //QueryBuider
      $account = DB::table('accounts')->where('accId',$id)->first();

      return view('account.edit')->withAccount($account);
    }

    //Update Account details...................................................................................................

    public function update(Request $request)
    {
      $id = $request->accountId;
      $acc = Account::find($id);
      $acc->accName = $request->accountName;
      $acc->balance = $request->balance;

      $acc->save();

      return redirect()->route('account.details',$id);
    }

    //delete Account...................................................................................................

    public function delete($id)
    {
      # Eloquent
      //$account = Account::find($id); // find ar vitor always primaryKey bola lagbe

      //QueryBuider
      $account = DB::table('accounts')->where('accId',$id)->first();

      return view('account.delete')->withAccount($account);
    }

    //Confirmation for delete Account

    public function destroy(Request $request)
    {
      # Eloquent
      //$account = Account::find($id); // find ar vitor always primaryKey bola lagbe

      //QueryBuider
      $id = $request->accountId;
      Account::destroy($id);

      return redirect()->route('account.index');
    }

}
