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


	//-------------------------------------------------------------
	
	//select-----------------------------------------------------------
	
	//echo $_POST["user"];
	//echo $_POST["pass"];
	
	//mysqli_select_db($conn, "Football");
	$id = $_POST['id'];
	$team1 = $_POST['team1'];
	$team2 = $_POST['team2'];
	$date = $_POST['date'];
	$time = $_POST['time'];
	$vanue = $_POST['vanue'];
	
	//$sql = "Select * from upcomingmatch where ID = '".$id."'";
	//$result = mysqli_query($conn, $sql);
	/*echo"<table border='1'>
	<tr>
	<th>UserName</th>
	<th>PassWord</th>
	</tr>";*/
	
   // while($row = mysqli_fetch_assoc($result))
	//{	//echo "<tr>";
		//echo "<td>" . $row['Username'] . "</td>";
		//echo "<td>" . $row['Password'] . "</td>";
		//echo "</tr>";
		
			$sql2 = "Update upcomingmatch Set Team1 = '".$team1."', Team2 = '".$team2."', Date = '".$date."', Time = '".$time."', Vanue = '".$vanue."' where ID = '".$id."'";
			
			if(mysqli_query($conn, $sql2))
			{
				echo"Update secessfully";
			}
			else
			{
				echo"ERROR".$sql."<br>".mysqli_error($conn);
			}
		
		
		/*else
		{
			
			echo "incorrect.";
		}*/
		
	//}
	//echo "</table>";
	
	mysqli_close($conn);
?>