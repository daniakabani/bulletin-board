<html>
<head>
<title> register new user </title>
<meta charset="utf8">
</head>
<body>
	<form method="post">
		Name: <input type="text" name="first_name" required></input></br></br>
		Last Name: <input type="text" name="last_name" required></input></br></br>
		E-mail: <input type="text" name="email" required></input></br></br>
		Password: <input type="password" name="password" required></input></br></br>
		<input type="submit" name="register" value="register"> </input></br></br>
	</form>
</body>
</html>


<?php
include("connect.php");
$name=@$_POST['first_name'];
$last_name=@$_POST['last_name'];
$email=@$_POST['email'];
$password=@$_POST['password'];

if(isset($_POST['register']))
{
	$insert= mysqli_query($link,"INSERT INTO`users` (`id`, `name`, `lastname`, `email`, `password`, `privilege`) VALUES (NULL, '$name', '$last_name', '$email', '$password', 'none')") or die("failed to register");
	header("location:index.html");
}



?>