<!DOCTYPE html>
<html>
<head>
	<title>Ticket Purchase</title>
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
				<form>
						<table>
							<tr>
								<td>FULL NAME: </td>
								<td>{{$ticket->userName}}</td>
							</tr>
							<tr>
								<td>EMAIL: </td>
								<td>{{$ticket->userEmail}}</td>
							</tr>
							<tr>
								<td>MOBILE NO: </td>
								<td>{{$ticket->userMobileNo}}</td>
							</tr>
							
							<tr>
								<td>Concert Name:</td>
								<td>{{$ticket->concertName}}</td>
							</tr>

							<tr>
								<td>Concert Date:</td>
								<td>{{$ticket->concertDateTime}}</td>
							</tr>

							<tr>
								<td>Issue Date:</td>
								<td>{{$ticket->issueDate}}</td>
							</tr>

							<tr>
								<td>Concert venue:</td>
								<td>{{$ticket->concertVenue}}</td>
							</tr>

							<tr>
								<td>Tiket Quantity:</td>
								<td>{{$ticket->ticketQuantity}}</td>
							</tr>

							<tr>
								<td>TotalPrice:</td>
								<td>{{$ticket->totalPrice}}</td>
							</tr>

						</table>
						<br/>
						<br>

						<a href = "{{ route('band.lpconcert') }}"> Purchase Again</a>
						<a href = "{{ route('home.index') }}"> Home</a>

					</form>
					<br/>
					<br/>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>