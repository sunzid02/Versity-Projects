<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Delete Concert</title>

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

      h1,h2,h3,h4{

        text-align: center;
      }

      table{

        margin: auto;
      }

    </style>

  </head>

  <body>
    <h1>Delete</h1>

    <table>

      <tr>
        <td>Band Name: </td>
        <td>{{$cons->bandName}} </td>
      </tr>

      <tr>
        <td>Concert No: </td>
        <td>{{$cons->concertNo}} </td>
      </tr>

      <tr>
        <td>Concert Name: </td>
        <td>{{$cons->concertName}} </td>
      </tr>

      <tr>
        <td>Concert DateTime: </td>
        <td>{{$cons->concertDateTime}} </td>
      </tr>

      <tr>
        <td>Concert Venue: </td>
        <td>{{$cons->concertVenue}} </td>
      </tr>

      <tr>
        <td>Ticket Quantity: </td>
        <td>{{$cons->ticketQuantity}} </td>
      </tr>

      <tr>
        <td>Per Ticket Price: </td>
        <td>{{$cons->perTicketPrice}} </td>
      </tr>


    </table>
    <h4>Click confirm for deleting concert:  <span style="font-size:30x; color:red">"{{$cons->concertName}}"</span></h4>

    <form method="post"  style="text-align:center">
      {{csrf_field()}}
      <input type="hidden" name="consNo" value="{{$cons->concertNo}}">
      <input type="submit" name="" value="Confirm" id="delete">
    </form>

    <br>
    <h3><a href="{{route('concert.delete', $cons->concertNo)}}">Back</a></h3>
  </body>
</html>
