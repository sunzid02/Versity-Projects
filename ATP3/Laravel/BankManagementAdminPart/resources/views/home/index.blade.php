<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Home</title>

    <style media="screen">
      a{
        font-size: 30px;
        text-align: center;
      }
      span
      {
        font-size: 30px;
      }
      body{
        background-color: lightblue;
      }
      h1{
        text-align: center;
      }
    </style>
  </head>

  <body>
    <h1>Welcome Home</h1><br>

    <a href="{{route('account.index')}}">Account</a> <span>|</span>
    <a href="{{route('logout.index')}}">Logout</a>

    <!-- <form  action="{{route('logout.index')}}" method="post">
      <input type="submit" name="" value="logout">
    </form> -->
  </body>
</html>
