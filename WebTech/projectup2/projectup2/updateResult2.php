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
	if(!($_POST["home"] == null) && !($_POST["result"] == null) && !($_POST["away"] == null))
	{
		$sql = "insert into result values ('".$_POST["id"]."','".$_POST["home"]."', '".$_POST["result"]."', '".$_POST["away"]."');";
	
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
<form action = "updateResult.php" method = "POST">
<input type = "submit" value = "Back">
</body>
</html>