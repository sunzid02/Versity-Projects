<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>abc</title>
  </head>
  <body>

    <table>
      <th>Band Type</th>
      <th>Band Name</th>

      <tr>



        <td>Folk</td>
        @foreach($allBands as $allBands)
        @if($allBands->bandType == "Rock")
        <td>{{$allBands->bandName}},</td>
        @endif



        @endforeach
        @foreach($allBands as $allBands)
        @if($allBands->bandType == "Metal")
        <td>{{$allBands->bandName}},</td>
        @endif


        @endforeach
      </tr>

    </table>

  </body>
</html>
