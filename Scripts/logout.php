<?php

// For going back to that page get $going_back variable from check_login.inc.php page
include './check_login.inc.php' ;

/* 
	Save the address of that page in which user click on logout
	and going back to that page again
*/
	$going_back = $_SERVER['HTTP_REFERER'] ;

	unset($_SESSION['user_id']) ;
	unset($_SESSION['admin']) ;
	
	if(!empty($going_back))
		header('Location: '.$going_back);
?>
