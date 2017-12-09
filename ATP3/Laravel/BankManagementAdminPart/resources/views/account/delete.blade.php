<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete Account</title>

    <style media="screen">
      body{
        font-size: 30px;
      }
      #delete
      {
        height: 40px;
        width: 90px;
        font-size: 20px;
      }
    </style>

  </head>

  <body>
    <h1>Delete Account</h1>

    <table>
      <tr>
        <td>ID: </td>
        <td>{{$account->accId}} </td>
      </tr>


      <tr>
        <td>No: </td>
        <td>{{$account->accNo}} </td>
      </tr>

      <tr>
        <td>Name: </td>
        <td>{{$account->accName}} </td>
      </tr>
      <tr>
        <td>Balance: </td>
        <td>{{$account->balance}} </td>
      </tr>

      <tr>
        <td>Last Transaction: </td>
        <td> {{ $account->lastTransaction}} </td>
      </tr>

    </table>
    <h4>Click confirm for deleting the account</h4>

    <form method="post">
      {{csrf_field()}}
      <input type="hidden" name="accountId" value="{{$account->accId}}">
      <input type="submit" name="" value="Confirm" id="delete">
    </form>

    <br>
    <a href="{{route('account.details',[$account->accId])}}">Back</a>
  </body>
</html>
