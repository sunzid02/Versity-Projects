<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Account Details</title>

    <style media="screen">
      body{
        font-size: 30px;
      }
    </style>

  </head>

  <body>
    <h1>Account Details</h1>

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

    <br>
    <a href="{{route('account.index')}}">Back to AccountList</a> <span>|</span>
    <a href="{{ route('account.edit',[$account->accId]) }}">Edit</a> <span>|</span>
    <a href="{{ route('account.delete',[$account->accId]) }}">Delete</a>


  </body>
</html>
