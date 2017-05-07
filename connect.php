<?php   
     $mysql_hostname= "127.0.0.1";
	 $mysql_username= "root";
	 $mysql_password= "";
	 $mysql_database= "bulletin";
	 $link=mysqli_connect ($mysql_hostname, $mysql_username, $mysql_password) or die("failed to connect to database");
	 mysqli_select_db($link,$mysql_database) or die ("cant select");
	 ?>