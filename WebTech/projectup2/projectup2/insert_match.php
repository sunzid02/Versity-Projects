<html>
<body>
<body style="background-color:powderblue;">
<form action = "insert_match2.php" method = "POST">
<br><br><br>
<div align = "top">
Team 1: <input type = "text" name = "team1"> <br> <br>
Team 2: <input type = "text" name = "team2"> <br> <br>
Date: &nbsp &nbsp <input type = "text" name = "date"> <br> <br>
Time: &nbsp <input type = "text" name = "time"> <br> <br>
Vanue: <input type = "text" name = "vanue"> <br> <br>
ID: <input type = "text" name = "id"> <br> <br>

<button type = "submit">Insert</button>
<button type = "submit" formaction = "updateMatch.php"> Update </button>
<button type = "submit" formaction = "deleteMatch.php"> Delete </button>
</br></br></br>
</div>
</form>
</body>
</html>

<!-----------------------------------------------------------------------------!-->

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
	$sql = "Select * from upcomingmatch";
	$result = mysqli_query($conn, $sql);
?>

<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body
		{
			font-size: 20px;
			color:gray;
			padding: 0;
			margin-top: 00;
			margin-left: 50;
			
		}
		
		

		
		table
		{
			margin: auto;
			font-size: 50px;
			margin-top: -400px;
			
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
			
			border-color: green;
		}
		
		
		.data-table tbody td
		{
			text-align: center;
		}
		
		.data-table tbody tr:nth-child(odd) td 
		{
			background-color: white;
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

		

	
	<div align = "top">
	<table class="data-table">
		<caption class="title">Match Schedule</caption>
		<thead>
			<tr>
			<th>ID</th>
			<th>Team1</th>
			<th>Team2</th>
			<th>Date</th>
			<th>Time</th>
			<th>Venue</th>
			</tr>
		</tr>
		</thead>
		<tbody>
		</div>
	
	
	
	<?php
	while($row = mysqli_fetch_assoc($result))
	{echo "<tr>";
		echo "<td>" . $row['ID'] . "</td>";
		echo "<td>" . $row['Team1'] . "</td>";
		echo "<td>" . $row['Team2'] . "</td>";
		echo "<td>" . $row['Date'] . "</td>";
		echo "<td>" . $row['Time'] . "</td>";
		echo "<td>" . $row['Vanue'] . "</td>";
		echo "</tr>";
	}
	echo "</table>";
	
	mysqli_close($conn);
	?>
	
</tbody>
	</table>
</body>
</html>