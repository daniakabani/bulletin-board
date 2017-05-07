<?php
	include("connect.php");
	$show=("SELECT * FROM announcements") or die("that didnt work xD");
	$sql=mysql_query($show);

	while($something=mysql_fetch_assoc($sql))
	{
		echo $something['announcement']."</br>";
	}


?>