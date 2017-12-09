<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Band Index</title>
    <style media="screen">
      body{
        background-color: lightblue;
      }
      h1,h2,h3
      {
        text-align:center;
      }
    </style>
  </head>

  <body>
    <h1>Band Management</h1>
    <h2>Welcome {{session('username')}}</h2>
    <br>

    <h2>List of Bands</h2>

      <table border="5" style="margin: auto;">


        <tr style="font-size:25px;">
          <th>ID</th>
          <th>NAME</th>
          <th>Type</th>
          <th>OPTION</th>
        </tr>

        @foreach($allBands as $allBands)
        <tr style="font-size:25px;">
          <td>{{$allBands->bandId}}</td>
          <td>{{$allBands->bandName}}</td>
          <td>{{$allBands->bandType}}</td>

          <td>  <a href = "{{ route('band.edit',$allBands->bandId) }}">Edit</a> |
                <a href = "{{route('concert.insert',$allBands->bandName)}}">Concert</a> |
                <a href="{{ route('band.delete',$allBands->bandId ) }}" style="color:red">Delete</a></td>
        </tr>
        @endforeach

        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>

      </table>


      <br>


            <h3><a href="{{route('band.create')}}" style="font-size:25px; text-align:center">Add another band</a></h3>
          <h3><a href="{{route('home.index')}}" style="font-size:25px; text-align:center">Back</a></h3>



  </body>
</html>
