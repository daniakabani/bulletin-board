<?php

	session_start();
	include("connect.php");
	$show=("SELECT * FROM announcements") or die("that didnt work xD");
	$sql=mysql_query($show);
	
	
	$title=@$_POST['title'];
	$category=@$_POST['category'];
	$bulletin=@$_POST['bulletin'];
	if(isset($_POST['go']))
{
	$insert= mysql_query("INSERT INTO `bulletin`.`announcements` (`id`, `title`, `category`, `announcement`, `email`) VALUES (NULL, '$title', '$category', '$bulletin', '".$_SESSION['email']."')") or die(mysql_error());
}
?>

<html>
<head>
<title> login </title>
<meta charset="utf8"/>
</head>
<body>
	<form method="post" action="search.php">
	search:
		<input type="text" name="search" align="center">
		<input type="submit" name="search_g" align="center">
	</form>
	
	
	<form method="post">
	Title   :   <input type="text" name="title" ><br/>
	category: <input type="text" name="category"></br>
	<textarea rows="10" cols="50" value="whats coockin today ehh???" name="bulletin"></textarea> </br>
	<input type="submit" value="post" name="go">
	</form>
	<a href="myposts.php"> MY POSTS <a>
	
	<table width="600"  cellpadding="10" cellspacing="10" class="table_rec" align="center"> 
     <tr>

	 </tr>
	 
	 
	 <?php
	 
while($something=mysql_fetch_assoc($sql))
	 {
		 echo "<tr>";
		 
		 echo "<td>".$something['announcement']."</td>";
		 
		 echo "</tr>";
	 }
	
	
	if(isset($_POST['search_g']))
	{
		$search=@$_POST['search'];
		$_SESSION["search"]=$search;
		header("location:search.php");
	}
?>
</table>


</body>
</html>



?>