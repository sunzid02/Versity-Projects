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
	$usname = $_POST['username'];
	$oldpass = $_POST['oldpassw'];
	$newpass = $_POST['newpassw'];
	
	$sql = "Select * from Registration where username = '".$usname."' and password = '".$oldpass."'";
	$result = mysqli_query($conn, $sql);
	/*echo"<table border='1'>
	<tr>
	<th>UserName</th>
	<th>PassWord</th>
	</tr>";*/
	
    while($row = mysqli_fetch_assoc($result))
	{	//echo "<tr>";
		//echo "<td>" . $row['Username'] . "</td>";
		//echo "<td>" . $row['Password'] . "</td>";
		//echo "</tr>";
		if(($_POST["username"] == $row['Username']) && ($_POST["oldpassw"] == $row['Password']))
		{
			$sql2 = "Update Registration Set Username = '".$usname."', Password = '".$newpass."' where username = '".$usname."' and password = '".$oldpass."'";
			
			if(mysqli_query($conn, $sql2))
			{
				echo"Insert secessfully";
			}
			else
			{
				echo"ERROR".$sql."<br>".mysqli_error($conn);
			}
		}
		
		if(($_POST["username"] == $row['Username']) && ($_POST["oldpassw"] == $row['Password']))
		{
			$sql3 = "Update Login Set Username = '".$usname."', Password = '".$newpass."' where username = '".$usname."' and password = '".$oldpass."'";
			
			if(mysqli_query($conn, $sql3))
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
			
			echo "incorrect.";
		}
		
	}
	//echo "</table>";
	
	mysqli_close($conn);
?>