<?php


	include("connect.php");
	session_start();
	
	
	
	$search=@$_POST['search'];
	$show=("SELECT * FROM announcements WHERE announcement LIKE '%".$search."%' ") or die ("you get nothing, good day sir!");/*"SELECT * FROM announcements WHERE announcement LIKE '".$search."' "*/
	$do=mysql_query($show);

while($something=mysql_fetch_assoc($do))
	 {
		 echo "<table>";
		 
		 echo "<tr>";
		 
		 echo "<td>".$something['announcement']."</td>";
		 
		 echo "</tr>";
		 
		 echo "</table>";
	 }
	?>