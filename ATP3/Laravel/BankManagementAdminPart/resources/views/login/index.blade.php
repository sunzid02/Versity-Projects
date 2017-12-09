<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
  </head>
  <body>
    <h1>Login</h1>

    <form method="post">
        {{csrf_field()}}
      <table>

        <tr>
          <td> <label for="u">Username: </label></td>
          <td><input type="text" name="username" value= "{{session('SessUsername')}}" id="u"></td>
        </tr>

        <tr>
          <td><label for="p">Password: </label></td>
          <td> <input type="password" name="password" value="" id="p"></td>
        </tr>


        <tr>
          <td></td>
          <td><input type="submit"  value="Login"></td>
        </tr>

      </table>
    </form>

    <div>
      @if(session('message'))
        {{session('message')}}
      @endif
    </div>

  </body>
</html>
