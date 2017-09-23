<?php

// Connect to Database
include('connection.php');

// Getting user data from database with help of session value

 if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
	$std_reg = $_SESSION['user_id'] ;
// $std_reg = '13pwcse1078' ;

// Getting Student resource
$query = "CALL Get_Student_Details('$std_reg')";

if ( $query_result = mysqli_query($conn,$query) )
{
	if ($query_num = mysqli_num_rows($query_result) > 0 )
	{
		$Row = mysqli_fetch_assoc($query_result) ;
	}
	else
	{
		echo "Sorry No Record Found!";
	}
	
}
else
{
	echo "Error: To Getting Student Resource!";
}

							
?>