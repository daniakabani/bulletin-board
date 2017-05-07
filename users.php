<?php
	include("connect.php");
	session_start();
	
	$show=("SELECT * FROM users ") or die("that didnt work xD");
	$do=mysql_query($show);

	echo"<a href=logout.php> logout </a></br>";
	while($something=mysql_fetch_assoc($do)):
		echo"<tr>"; 
			echo"<form method=post>";
			echo"<td> <input type=text name=id value=" . $something['id']."></input> </td></br>";
			echo"<td> <input type=text name=name1 value=" . $something['name']."></input> </td></br>";
			echo"<td> <input type=text name=last value=" . $something['lastname']."></input></td></br>";
			echo"<td> <input type=text name=email value=" . $something['email']."></input></td></br>";
			echo"<td> <input type=submit value=delete name=delete></input> </td></br>";
		echo"<tr>";
	 endwhile;
	 
	 
	 if(isset($_POST['delete']))
{
	$insert= mysql_query(" DELETE FROM `users` WHERE email='".$_POST['email']."' ") or die(mysql_error());
		 header("location:homeadmin.php");
}
if ($_SESSION['email']==null)
	{
		header("location:index.html");
	}

?>