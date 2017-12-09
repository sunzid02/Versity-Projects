<!DOCTYPE html>
<html>
<head>
	<title>Ticket Purchase</title>

	<script type='text/javascript'>
	  function changeTotal()
	  {
		    var price = document.getElementById('price').value;
		    var quantity = document.getElementById('quantity').value;

		    var total = document.getElementById('totalPrice');
		    var totalPrice = price * quantity;
		    total.innerHTML = totalPrice;
		    //alert(totalPrice);
	  }
 </script>

</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h1>Ticket Purchase</h1>
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
				<h3></h3>

					       @foreach($bandconcert as $bc)

							<tr>
								<td>Name: </td>
								<td>{{$bc->concertName}}</td>
							</tr>

							<tr>
								<td>DateTime: </td>
								<td>{{$bc->concertDateTime}}</td>
							</tr>

							<tr>
								<td>Venue: </td>
								<td>{{$bc->concertVenue}}</td>
							</tr>

							<tr>
								<td>Ticket Price: </td>
								<td>{{$bc->perTicketPrice}}</td>
							</tr>


							@endforeach

				<form method="post">
					{{csrf_field()}}
						<table>

					       @foreach($bandconcert as $bc)


								<input type="hidden" name = "concertNo" value = "{{$bc->concertNo}}">
								<input type="hidden" name = "concertName" value = "{{$bc->concertName}}">
								<input type="hidden" name = "concertDateTime" value = "{{$bc->concertDateTime}}">
								<input type="hidden" name = "concertVenue" value = "{{$bc->concertVenue}}">
								<input type="hidden" name = "concertTicketPrice" value = "{{$bc->perTicketPrice}}" id = "price">
							@endforeach



							<tr>
								<td>FULL NAME: </td>
								<td><input type="text" name = "fname"></td>
							</tr>
							<tr>
								<td>EMAIL: </td>
								<td><input type="text" name = "email"></td>
							</tr>
							<tr>
								<td>MOBILE NO: </td>
								<td><input type="text" name = "mobile"></td>
							</tr>

							<tr>
								<td>Quantity</td>
								<td>
									<select name = "num" id = "quantity" onchange = "changeTotal()">
									  <option value="0">0</option>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									</select>
								</td>
							</tr>

							<tr>
								<td>Total PRICE:</td>
								<td><label id = "totalPrice"> 0 </label></td>
							</tr>

							<tr>
								<td></td>
								<td><input type="submit" value="Submit"></td>
							</tr>

							<tr>
								<td><a href = "{{route('band.lpconcert')}}"> Back </a></td>
							</tr>

						</table>
					</form>
					<br/>
					<br/>
					<label>

						@if($errors->any())
							@foreach($errors->all() as $errs)
								<p style="color:Red;"> {{$errs}}</p>
							@endforeach
						@endif

					</label>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>
