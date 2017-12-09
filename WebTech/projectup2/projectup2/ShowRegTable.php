<?php
// database connection------------------
$conn = mysqli_connect("localhost", "root", "", "Football");

	if(!$conn)
	{
		die("Database not connected....".mysqli_connect_error());
	}
	else 
	{
		//echo"Connect database sucessfully";
		echo "<br>";
	}

	
	//mysqli_select_db($conn, "Student");
	$sql = "Select * from registration";
	$result = mysqli_query($conn, $sql);
?>

<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body
		{
			font-size: 20px;
			color: blue;
			padding: 0;
			margin-top: 50;
			margin-left: 50;
		}
		
		table
		{
			margin: auto;
			font-size: 50px;
		}
		
		.data-table
		{
			
			font-size: 20px;
		}
		
		.data-table th, 
		.data-table td
		{
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		
		.data-table thead th
		{
			background-color: blue;
			color: white;
			border-color: green;
		}
		
		
		.data-table tbody td
		{
			text-align: center;
		}
		
		.data-table tbody tr:nth-child(odd) td 
		{
			background-color: #f4fbff;
		}
		
		.data-table tbody tr:hover td
		{
			background-color: #ffffa2;
			border-color: #ffff0f;
		}
		.bgimg {
			background:url(ground.jpg);
			background-size: 1400px 800px;
			background-repeat: no-repeat;
			}
	</style>
</head>
<body>
	
	<table class="data-table">
		<caption class="title">Registration Table</caption>
		<thead>
			<tr>
			<th>First_Name</th>
			<th>Last_Name</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Gender</th>
			</tr>
		</tr>
		</thead>
		<tbody>
	
	
	
	<?php
	while($row = mysqli_fetch_assoc($result))
	{echo "<tr>";
		echo "<td>" . $row['First_Name'] . "</td>";
		echo "<td>" . $row['Last_Name'] . "</td>";
		echo "<td>" . $row['Username'] . "</td>";
		echo "<td>" . $row['Password'] . "</td>";
		echo "<td>" . $row['Email'] . "</td>";
		echo "<td>" . $row['Gender'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysqli_close($conn);
	?>
	
</tbody>
	</table>
</body>
</html>