<html>
<body>
<style>
body
{
	margin-top: 300px;
	margin-right: 80px;
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

<form action = "passwordChange.php" method = "POST">
<div align = "right">
Username: <input type = "text" name = "username"> <br> <br>
Old Password: <input type = "password" name = "oldpassw"> <br> <br>
New Password: <input type = "password" name = "newpassw"> <br> <br>
<input type = "submit" value = "Submit" color = "blue">
<div>
</form>
</body>
</html>
