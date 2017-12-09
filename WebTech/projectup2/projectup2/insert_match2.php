<?php
// database connection------------------
$conn = mysqli_connect("localhost", "root", "", "Football");

	if(!$conn)
	{
		die("Database not connected....".mysqli_connect_error());
	}
	else 
	{
		echo"Connect database sucessfully";
		echo "<br>";
	}


// insert------------------------------------
	if(!($_POST["team1"] == null) && !($_POST["team2"] == null) && !($_POST["date"] == null) && !($_POST["time"] == null) && !($_POST["vanue"] == null))
	{
		$sql = "insert into upcomingmatch values ('".$_POST["id"]."','".$_POST["team1"]."', '".$_POST["team2"]."', '".$_POST["date"]."', '".$_POST["time"]."', '".$_POST["vanue"]."');";
	
		if(mysqli_query($conn, $sql))
		{
			echo"Insert secessfully";
		}
		else
		{
			echo"ERROR".$sql."<br>".mysqli_error($conn);
		}
	}
	
	
	
	
	
	else
	{
		echo "para missing";
	}
	//-------------------------------------------------------------
	
	//select-----------------------------------------------------------
	
	
	
	

	
	//----------------------------------------------------------------
	
	
	
	mysqli_close($conn);


?>
<html>
<body>
<form action = "insert_match.php" method = "POST">
<input type = "submit" value = "Back">
</body>
</html>