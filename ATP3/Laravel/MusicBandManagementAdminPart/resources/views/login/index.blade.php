
<!DOCTYPE html>
<html>
<head>
	<title>Login - User Manager</title>
	<style media="screen">
      body{
        background-color: lightblue;
        font-size: 20px;
      }
    </style>
</head>
<body>
	<table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h1>Band Management</h1>
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
				<h2>Login</h2>

				<form method="post">
					{{csrf_field()}}
						<table>
							<tr>
								<td><label for="un">USERNAME: </label></td>
								<td><input type="text" id="un" name="username" value= "{{session('SessUsername')}}"></td>
							</tr>
							<tr>
								<td><label for="p">PASSWORD: </label></td>
								<td><input type="password" id="p" name="password"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" value="Login"></td>
							</tr>
							<!--
							<tr>
								<td></td>
								<td>
									<br/>
									Click <a href="register.html">here</a> to register
								</td>
							</tr> -->
						</table>
					</form>
					
					<div>
      			@if(session('message'))
        		{{session('message')}}
      			@endif
    			</div>


					<br/>
					<br/>
					<label>Copyright (Band Management) 2017 Copyright Holder All Rights Reserved.</label>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>
</body>
</html>
