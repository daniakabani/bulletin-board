<?php
	session_start();
	include("connect.php");
	$show=("SELECT * FROM announcements") or die("that didnt work xD");
	$do=mysql_query($show);
	$something=mysql_fetch_assoc($do);
	
	echo @$_POST['id'];
	echo "<form method=post>";
	echo "<input type=text name=id2 value=" . $something['id']."> </input> </br>" ; 
	echo "<textarea rows=10 cols=50 name=bulletin2></textarea> </br>";
	echo "<input type=submit value=update name=update>";
	echo "</form>";
	
	if(isset($_POST['update']))
	{
		$update= mysql_query(" UPDATE `bulletin`.`announcements` SET `announcement` = '".@$_POST['bulletin2']."' WHERE `id` ='".@$_POST['id2']."' ") or die(mysql_error());
		header("location:homeadmin.php");
}
		
	echo @$_POST['id2'];
	?>