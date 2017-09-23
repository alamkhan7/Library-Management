<?php
	ob_start();
	session_start();

	/*Get current file name (used in login form)*/
	$current_file = $_SERVER['SCRIPT_NAME'] ;

	/* 
	Save the address of that page in which user click on logout
	and going back to that page again
	*/
	if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER']))
		$going_back = $_SERVER['HTTP_REFERER'] ;

function loggedin()
{
	if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
		return true ;
	else
		return false ;
}

function admin_Login()
{
	if (isset($_SESSION['admin']) && !empty($_SESSION['admin']))
		return true ;
	else
		return false ;
}

?>