<?php

/*
    (C) Habibullah
    Connection to Database, Located on Local Server or Cloud 
*/

	$host  ="localhost";
	$dbuser="root";
	$pass  =")(*LKJ";   // Must be changed
	$dbname="library_project_test";
	$conn = mysqli_connect($host,$dbuser,$pass,$dbname);
	

	if(mysqli_connect_errno())
 	{
 		die("Connection Failed" . mysqli_connect_errno());
 	}
 	else
 		//echo "Conntect To Library Database Done!<br><br>";

?>
