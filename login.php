<html>
<head>
<title> bulletin board </title>
<meta charset="utf8"/>
</head>
<body>
		<form method="POST">
			<input type="text" name="email" id="email">
			<input type="password" name="pass" id="pass">
			<input type="submit" value="login" name="login">
			
		</form>	</br>
</body>
</html>


<?php
	session_start();
include("connect.php");

$email=@$_POST['email'];
$pass=@$_POST['pass'];

$sql=("SELECT * FROM users WHERE email='".$email."' AND password='".$pass."' AND privilege='admin' LIMIT 1" ) or die(mysql_error());
$res= mysql_query($sql);
$check=mysql_num_rows($res);

$normal=("SELECT * FROM users WHERE email='".$email."' AND password='".$pass."' LIMIT 1" ) or die(mysql_error());
$exec= mysql_query($normal);
$see=mysql_num_rows($exec);

if(isset($_POST['login']))
{
if($check==1)
{
	$_SESSION["email"]=$email;
	 header("location:homeadmin.php");
	 exit();
}
else if($see==1)
{
	$_SESSION["email"]=$email;
	 header("location:home.php");
	 exit();
}
else 
	 header("location:error.html");
	 exit();
}
?>