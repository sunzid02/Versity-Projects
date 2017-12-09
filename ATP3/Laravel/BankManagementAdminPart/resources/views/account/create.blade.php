<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create Account</title>

    <style media="screen">
      body{
        font-size: 30px;
      }
      button
      {
        height:40px; width: 80px; font-size: 20px;
      }
    </style>

  </head>
  <body>
    <h1>Create Account</h1>

    <a href="{{route('account.index')}}">Back to Account List</a>
    <br>
	
    <form  method="post">
      <br>
      {{csrf_field()}}

      <table>
          <tr>
            <!-- <td id="an"> Account No:</td> -->
            <td><label for="an">Account No:</label></td>
            <td> <input type="text"  id="an" name="accountNo" value="{{old('accountNo')}}"></td>
          </tr>

          <tr>
            <td><label for="aname">Account Name:</label></td>
            <td> <input type="text" name="accountName"id="aname" value="{{old('accountName')}}"></td>
          </tr>

          <tr>
            <td><label for="i">Initial Balance:</label></td>
            <td> <input type="text" name="initialBalance" id="i" value="{{old('initialBalance')}}"></td>
          </tr>

          <tr>
            <td> </td>
            <td>
              <button type="submit" value="Create">Create</button>
            </td>
          </tr>

      </table>
    </form>

    <!-- Printing validation errors-->
        @if($errors->any())
          @foreach($errors->all() as $err)
            <p>{{$err}}</p>
          @endforeach
        @endif

  </body>
</html>
