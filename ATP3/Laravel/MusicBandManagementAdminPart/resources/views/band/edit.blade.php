<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Band Edit</title>

    <style media="screen">
      body{
        font-size: 20px;
        background-color: lightblue;
      }
      table
      {
        margin: auto;
      }
      h1,h2,h3
      {
        text-align: center;
      }
    </style>

  </head>

  <body>
    <h2>Edit Band Details</h2>

    <form method="post">
      {{csrf_field()}}
      <input type="hidden" name="bandId" value="{{$band->bandId}}">

      <table>
        <tr>
          <td>Band ID: </td>
          <td>{{$band->bandId}} </td>
        </tr>


        <tr>
          <td>Band Name: </td>
          <td> <input type="text" name="bandName" value="{{$band->bandName}}"> </td>
        </tr>

        <tr>
          <td>Band Type</td>
          <td>
            <select name = "bandType">
              <option value="Rock">Rock</option>
              <option value="Metal">Metal</option>
              <option value="Folk">Folk</option>
              <option value="HeavyMetal">Heavy Metal</option>
            </select>
          </td>
        </tr>

        <tr>
          <td></td>
          <td><input type="submit" value="Update"></td>
        </tr>

      </table>
    </form>
    <br>

    <h3><a href="{{route('band.index')}}">Back</a></h3>

    <h3>  <label>

        @if($errors->any())
          @foreach($errors->all() as $errs)
            <p style="color:Red;"> {{$errs}}</p>
          @endforeach
        @endif

      </label></h3>

  </body>
</html>
