<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Adding a new band</title>
    <style media="screen">
      body{
        background-color: lightblue;
      }
      h3{
        text-align: center;
      }
    </style>
  </head>
  <body>
    <table border="0" width="100%">
		<tr>
			<td width="100"></td>
			<td align="center">
				<h1>Band Management</h1>
        <h3>Welcome {{session('username')}}</h3>
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
				<h2>Add Your Band</h2>
				<form method="post">
          {{csrf_field()}}

						<table>

							<tr>
								<td>Band Name: </td>
								<td><input type="text" name="bandName"></td>
							</tr>

              <tr>
								<td>Quantity</td>
								<td>
									<select name = "bandType" id = "quantity">
									  <option value="Rock">Rock</option>
									  <option value="Metal">Metal</option>
									  <option value="Folk">Folk</option>
									  <option value="HeavyMetal">Heavy Metal</option>
									</select>
								</td>
							</tr>

							<tr>
								<td></td>
								<td><input type="submit" value="Insert"></td>
							</tr>

              <tr>
                <td></td>
              </tr>

						</table>
					</form>

					<br/>
					<br/>
					<label>  <a href="{{route('band.index')}}" style="font-size:20px; text-align:center">Back</a></label>
				</center>
			</td>
			<td width="100"></td>
		</tr>
	</table>

<h3><label>

  @if($errors->any())
    @foreach($errors->all() as $errs)
      <p style="color:Red;"> {{$errs}}</p>
    @endforeach
  @endif

</label>
</h3>

  </body>
</html>
