<?php
	include("connect.php");
	session_start();
	
	$show=("SELECT * FROM announcements ") or die("that didnt work xD");
	$do=mysql_query($show);
	?>
<html>
<head>
<title> my stuff </title>
<meta charset="utf8"/>
</head>
<body>
	<form method="POST">
	<table width="600"  cellpadding="10" cellspacing="10" class="table_rec" align="center"> 
     <tr>
		<td> announcement</td>
	 </tr>
	 <form method="post" action="update.php">
	 <?php while($something=mysql_fetch_assoc($do)):?>
		<tr> 
			<td><?phpecho " <form method=post action=update.php>"?></td>
			<td><?php echo"<input type=text name=id value=" . $something['id'] ; ?> </td>
			<td><?php echo$something['announcement']?></td>
			<td><?php echo"<input type=text name=title value=" . $something['title'] ; ?> </td>
			<td> <input type="submit" value="delete" name="delete"> </td>
			<td> <input type="submit" value="update" name="update"> </td>
		<tr>
	 <?php endwhile;?>
	</form>
</table>
</form>

<form method="post">
change password:
<input type="text" name="pass2">
<input type="submit" name="pass_c" value="change">
</form>

<?php
	if(isset($_POST['delete']))
{
	$insert= mysql_query(" DELETE FROM `announcements` WHERE `id` ='".@$_POST['id']."' AND email='".$_SESSION['email']."' ") or die(mysql_error());
		 header("location:home.php");
}
	if(isset($_POST['update']))
	{
		 	 header("location:update.php");
}

if(isset($_POST['pass_c']))
	{
		 	 $update= mysql_query(" UPDATE `bulletin`.`users` SET `password` = '".$_POST['pass2']."' WHERE `email` ='".$_SESSION['email']."' ") or die(mysql_error());
}
?>
</body>
</html>




<!--
profile 
admin previlige delete update all
update email, password
update category
search
 AND email='".$_SESSION['email']."' AND email='".$POST['title']."'
 WHERE email='".$_SESSION['email']."'
-->