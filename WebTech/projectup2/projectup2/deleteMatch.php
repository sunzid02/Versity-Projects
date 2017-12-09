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
		//echo "<br>";
	}
//------------------------------------------


	
	
	//mysqli_select_db($conn, "Football");
	$id = $_POST['id'];
	
		
		$sql2 = "Delete From Upcomingmatch where ID = '".$id."'";
		
		if(mysqli_query($conn, $sql2))
		{
			echo"Update secessfully";
		}
		else
		{
			echo"ERROR".$sql."<br>".mysqli_error($conn);
		}
		
		
		
	
	mysqli_close($conn);
?>