<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Account Index</title>
    <style media="screen">
      body{
        font-size: 30px;
      }
      button
      {
        height:50px; width: 60px; font-size: 20px;
      }
    </style>
  </head>

  <body>
      <h2>List of Accounts</h2>
      <a href="{{route('account.create')}}">Create new</a>
      <br>

      <ul>
          @foreach($accounts as $acc)
            <li> <a href="{{route('account.details',[$acc->accId])}}">{{$acc->accNo}} || ({{$acc->typeName}})</a> </li>
            <br>
          @endforeach
      </ul>

      <form action="{{route('home.index')}}" method="post">
        {{csrf_field()}}
        <br><button type="submit" name="backButton" >Back</button>
      </form>

  </body>
</html>
