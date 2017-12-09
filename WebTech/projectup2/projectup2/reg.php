<html>
<body>



<style>
{
	margin-top: 400px;
	margin-right: 280px;
	background: blue;
}
.bgimg {
			background:url(back.jpg);
			background-size: 1000px 700px;
			background-repeat: no-repeat;
			}
</style>
<body class="bgimg">
<body style="background-color:powderblue;">
<form action = "registration.php" method = "POST">
<br><br><br>
<div align = "right">
First Name: <input type = "text" name = "fname"> <br> <br>
Last Name: <input type = "text" name = "lname"> <br> <br>
Username: <input type = "text" name = "user"> <br> <br>
Password: <input type = "password" name = "pass"> <br> <br>
Email: <input type = "text" name = "email"> <br> <br>
Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <br><br>
<input type = "submit" value = "Confirm Registration">
</br></br></br>
</div>
</form>
</body>
</html>
