<?php
// database connection------------------
$conn = mysqli_connect("localhost", "root", "", "Football");

	if(!$conn)
	{
		die("Database not connected....".mysqli_connect_error());
	}
	else 
	{
		// echo"Connect database sucessfully";
		echo "<br>";
	}


// insert------------------------------------
	if(!($_POST["fname"] == null) && !($_POST["lname"] == null) && !($_POST["user"] == null) && !($_POST["pass"] == null) && !($_POST["email"] == null) && !($_POST["gender"] == null))
	{
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$userName = $_POST["user"];
		$pass = $_POST["pass"];
		$email = $_POST["email"];
		$legal = 0;
		
		/*if(strlen($fname) < 3)
			$legal ++;
		if(strlen($lname) < 3)
			$legal ++;
		if(strlen($userName) >= 3)
			$legal++;
		if(strlen($pass)<3)
			$legal++;
		if(strpos($email,'@') >= 3)
			$legal++;*/
		
		//if($legal == 5)
		//{
			$sql = "insert into Registration values ('".$_POST["fname"]."', '".$_POST["lname"]."', '".$_POST["user"]."', '".$_POST["pass"]."', '".$_POST["email"]."', '".$_POST["gender"]."');";
	
			if(mysqli_query($conn, $sql))
			{
				echo"Insert secessfully";
			}
			else
			{
				echo"ERROR".$sql."<br>".mysqli_error($conn);
			}
		//}
		//else 
		//	echo "registration failed...please try again.";		
	}
	
	
	if(!($_POST["fname"] == null) && !($_POST["lname"] == null) && !($_POST["user"] == null) && !($_POST["pass"] == null) && !($_POST["email"] == null) && !($_POST["gender"] == null))
	{
		$sql2 = "insert into Login values ('".$_POST["user"]."', '".$_POST["pass"]."');";
	
		if(mysqli_query($conn, $sql2))
		{
			//echo"Insert secessfully";
		}
		else
		{
			echo"ERROR".$sql2."<br>".mysqli_error($conn);
		}
	}
	
	
	
	
	else
	{
		echo "para missing";
		echo "invalid inputs. firstname and lastname must be at least 4 characters long. passwords must be 4 characters long.<br/>username and email must be as ***@***<br/> username and email must be same";
	}
	//-------------------------------------------------------------
	
	//select-----------------------------------------------------------
	
	
	
	

	
	//----------------------------------------------------------------
	
	
	
	mysqli_close($conn);


?>