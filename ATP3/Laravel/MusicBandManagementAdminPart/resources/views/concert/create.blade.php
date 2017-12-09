<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Add Concert</title>
    <style media="screen">
      body{
        background-color: lightblue;
      }
    </style>
  </head>
  <body>
    <table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h1>Band Management</h1>
        <h2>Welcome {{session('username')}}</h2>
        <br>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td align="center">
				<hr/>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				<h2>Create Concert</h2>
        <br>
        <h2>Band Name: {{$bandName}}</h2>
				<form method="post">
          {{csrf_field()}}

						<table>
            		<input type="hidden" name="bandName" value="{{$bandName}}">

              <tr>
								<td>ConcertName: </td>
								<td><input type="text" name="concertName"></td>
							</tr>

              <tr>
								<td>ConcertDateTime: </td>
								<td><input type="text" name="concertDateTime"></td>
							</tr>

              <tr>
								<td>ConcertVenue: </td>
								<td><input type="text" name="concertVenue"></td>
							</tr>

							<tr>
								<td>TicketQuantity:</td>
								<td><input type="text" name="ticketQuantity"></td>
							</tr>

							<tr>
								<td>PerTicketPrice:</td>
								<td><input type="text" name="perTicketPrice"></td>
							</tr>


              <tr>

              </tr>

              <tr>
              <td></td>
                <td><input type="submit" name="" value="Insert"> </td>
              </tr>

              <tr>
                <td></td>
              </tr>

						</table>
					</form>

          <!-- Printing validation errors-->

        <label>

          @if($errors->any())
            @foreach($errors->all() as $errs)
              <p style="color:Red;"> {{$errs}}</p>
            @endforeach
          @endif

        </label>



					<br/>
					<br/>
					<label>  <a href="{{route('band.index')}}" style="font-size:20px; text-align:center">Back</a></label>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>

  </body>
</html>
