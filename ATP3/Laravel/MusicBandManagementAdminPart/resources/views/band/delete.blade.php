<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete Band</title>

    <style media="screen">
      body{
        font-size: 30px;
        background-color: lightblue;
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
    <h1>Delete</h1>

    <table>
      <tr>
        <td>Band ID: </td>
        <td>{{$band->bandId}} </td>
      </tr>

      <tr>
        <td>Band Name: </td>
        <td>{{$band->bandName}} </td>
      </tr>

      <tr>
        <td>Band Type: </td>
        <td>{{$band->bandType}} </td>
      </tr>


    </table>
    <h4>Click confirm for deleting Band:  <span style="font-size:30x; color:red">"{{$band->bandName}}"</span></h4>

    <form method="post">
      {{csrf_field()}}
      <input type="hidden" name="bandId" value="{{$band->bandId}}">
      <input type="submit" name="" value="Confirm" id="delete">
    </form>

    <br>
    <a href="{{route('band.index')}}">Back</a>
  </body>
</html>
