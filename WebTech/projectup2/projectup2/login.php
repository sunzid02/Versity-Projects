
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
	$name = $_POST['usern'];
	$pass = $_POST['passw'];
	
	$sql = "Select * from Login where username = '".$name."' and password = '".$pass."'";
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
		if(($_POST["usern"] == $row['Username']) && ($_POST["passw"] == $row['Password']))
		{
			echo $_POST["usern"];
			//echo "<br>";
			//echo"login sucessfully";
			//echo"<br>";
			
			/*<html>
			<body>
			<h1> Welcome Mr. $_POST["usern"]</h1>
			</body>
			</html>*/
		}
		else{
			
			//header("location: error.php");
			echo "incorrect password";
		}
		
	}
	
	//echo "</table>";
	
	mysqli_close($conn);
?>


<!DOCTYPE html>
<html>
<body>
<h1> Welcome Mr. </h1>

<style>
body
{
	
	background:#f2f2f2f;
}

.nav
{
	width:100%;
	height:80px;
	background:green;
	border-top-left-radius: 8px;
	border-top-right-radius: 8px;
}

ul
{
	list-style:none;
	padding:0;
	margin:0;
	position: absolute;
}

ul li
{
	float: left;
	margin-top: 20px;
}

ul li a
{
	width: 150px;
	color: black;
	display: block;
	text-decoration: none;
	font-size: 20px;
	text-align: center;
	padding: 10px;
	font-weight: bold;
}
a:hover
{
	background-color: red;
}
.bgimg 
		{
			background:url(back.jpg);
			background-size: 1400px 800px;
			background-repeat: no-repeat;
		}

</style>


<body class="bgimg">

	<div class = "nav">
	<ul>
	<li> <a href = "http://localhost/projectup2/showRegTable.php"> Show Reg Table </a> </li>
	<li> <a href = "http://localhost/projectup2/insert_match.php"> Update Match Schedule </a> </li>
	<li> <a href = "http://localhost/projectup2/updateResult.php"> Update Result </a> </li>
	<li> <a href = "http://localhost/projectup2/changePassword.php"> Change Password </a> </li>
	</ul>
	</div>

</body>
</html>