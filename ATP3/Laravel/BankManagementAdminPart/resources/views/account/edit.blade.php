<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Account Edit</title>

    <style media="screen">
      body{
        font-size: 30px;
      }
    </style>

  </head>

  <body>
    <h2>Edit Account Details</h2>

    <form method="post">
      {{csrf_field()}}
      <input type="hidden" name="accountId" value="{{$account->accId}}">

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
          <td><input type="text" name="accountName" value="{{$account->accName}} "></td>
        </tr>
        <tr>
          <td>Balance: </td>
          <td><input type="text" name="balance" value="{{$account->balance}} "></td>
        </tr>

        <tr>
          <td></td>
          <td><input type="submit" value="Update"></td>
        </tr>

      </table>

    </form>
    <br>
    <a href="{{route('account.details',[$account->accId])}}">Back</a>




  </body>
</html>
