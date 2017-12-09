<!DOCTYPE html>
<html>
<head>
	<title>Home - User Manager</title>
  <style media="screen">
    body{
      background-color: lightblue;
      font-size: 30px;
    }
  </style>
</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h1>Band Management </h1>
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
			<td align="center">
				<a href="{{route('home.index')}}">Home</a> |
				<a href="#">Users</a> |
				<a href="{{route('band.index')}}">Band</a> |
				<a href="{{route('report.index')}}"> Report </a> |
				<a href="{{route('band.lpconcert')}}">Concert</a> |
				<a href="{{route('logout.index')}}">Logout</a>
			</td>
			<td width="100"></td>
		</tr>
		<tr>
			<td width="100"></td>
			<td>
				<br/>
				<center>
				<h3>Admin Home</h3>
					<p>Welcome <strong>{{session('username')}}</strong></p>
					<p>Your last login was on {{$lastlogin}}</p>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>
