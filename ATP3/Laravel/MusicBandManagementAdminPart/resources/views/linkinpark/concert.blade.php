<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Concert</title>
    <style media="screen">
      body{
        background-color: lightblue;
      }
      h1,h2
      {
        text-align:center;
      }
    </style>
  </head>

  <body>
    <h1>Band Management</h1>
    <h2>Welcome {{session('username')}}</h2>

    <br>

    <h1>All Concerts</h1>

      <table border="5" style="margin: auto;">


        <tr style="font-size:25px;">

          <th>Band Name</th>
          <th>ConcertNo</th>
          <th>ConcertName</th>
          <th>ConcertDateTime</th>
          <th>ConcertVenue</th>
          <th>TicketQuantity</th>
          <th>PerTicketPrice</th>
          <th>Option</th>

        </tr>

        @foreach($lpConcert as $lpconcert)
        <tr style="font-size:25px;">

          <td>{{$lpconcert->bandName}}</td>
          <td>{{$lpconcert->concertNo}}</td>
          <td>{{$lpconcert->concertName}}</td>
          <td>{{$lpconcert->concertDateTime}}</td>
          <td>{{$lpconcert->concertVenue}}</td>
          <td>{{$lpconcert->ticketQuantity}}</td>
          <td>{{$lpconcert->perTicketPrice}}</td>


            <td>  <a href = "{{route('concert.edit', $lpconcert->concertNo )}}">Edit</a> |
                  <a href="{{route('concert.delete', $lpconcert->concertNo )}}" style="color:red">Delete</a>
            </td>

        </tr>
        @endforeach

        <tr>
        </tr>
        <tr>
        </tr>
        <tr>
        </tr>

      </table>


      <h2><a href="{{route('home.index')}}" style="font-size:25px; text-position:center">Back</a></h2>
      <h2>{{session('message')}}</h2>

  </body>
</html>
