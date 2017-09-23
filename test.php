<?php
include('./Scripts/connection.php');

$add_message = "" ;
$delete_message = "" ;

function get_student_data($book_id,$reg_no)
{
	include ('./Scripts/connection.php');

	global $delete_message ;

	$std_query = "CALL Get_Student_Details('$reg_no')";

	if ( $std_query_result = mysqli_query($conn,$std_query) )
	{
		if ($std_row = mysqli_fetch_assoc($std_query_result))
		{

			if($std_row['Student_Reg'] > 0)
			{
				$delete_message = "Student Found!" ;
				return true ;
			}
			else
			{
				$delete_message = "Error: Student Not Found!";
				return false ;
			}

		}
		else
		{
			$delete_message = "Error: Getting Row From Get_Student_Details!";
			return false ;
		}
	}
	else
	{
  		$delete_message = "Error: Getting Student Resource!";
  		return false ;
	}
}

function get_book_data($book_id,$reg_no)
{
	include('./Scripts/connection.php');
	global $book_message ;
	$book_query = "CALL Get_Book_Details('$book_id')";
	
	if ( $query_result = mysqli_query($conn,$book_query) )
	{
		if ($book_row = mysqli_fetch_assoc($query_result))
		{
	  		$book_copy = $book_row['Book_Copy'] ;
	  		if ($book_copy > 0)
	  		{
	  			mysqli_free_result($query_result);
	  			return $book_copy ;	
	  		}
	  		else
	  		{
	  			echo $book_message = "Sorry! Book Copy Not Available";
	  			return false ;
	  		}
	  	}
	  	else
	  	{
	  		echo $book_message = "Sorry Book Not Available in Library!";
	  		return false ;
	  	}

	}
	else
	{
		echo $book_message = "Error: Getting Book Resource!";
		return false ;
	}

}


/*Issue Book*/
if (isset($_POST['add-book-id']) && isset($_POST['reg_no']) && isset($_POST['submit']))
{
	 $book_id = $_POST['add-book-id'] ;
	 $reg_no = $_POST['reg_no'] ;

	 if (!empty($book_id) && !empty($reg_no))
	 {
	 	if ($no_copies=get_book_data($book_id,$reg_no))
	 	{
	 		include ('./Scripts/connection.php');
	 		$add_query = "call Issue_Book('$reg_no' , '$book_id' , '$no_copies')";

			if ($issue_query_result = mysqli_query($conn,$add_query) )
				echo $book_message = "Book Successfuly Issue!";
			else		
				echo $book_message = "Error: Issue Book!";
		}
	 	else
	 		echo $book_message ;
	 }
	 	
	 else
		echo $book_message = "Fill Please The Form!" ;	
}

/*Delete Book From User Profile*/
if (isset($_POST['delete-book-id']) && isset($_POST['reg_no']) && isset($_POST['submit']))
{
	$book_id = $_POST['delete-book-id'] ;
	$reg_no = $_POST['reg_no'] ;
	$fine = $_POST['fine'] ;
	$fine_reason = $_POST['fine_reason'] ;


	if (!empty($book_id) && !empty($reg_no))
	{
		$no_copies=get_book_data($book_id,$reg_no) ;
		$no_copies = $no_copies + 1 ;     
		$book_query = "call Return_Book('$reg_no','$book_id','$fine' ,'$fine_reason','$no_copies')";
		
		if ( $query_result = mysqli_query($conn,$book_query) )
  		{
    		echo $delete_message = "Book Successfuly Return!";
    	}
		else
  			echo $delete_message = "Error: Getting Book Resource!";
	}
	else
		$delete_message = "Fill Please The Form!" ;

}


/*Return book added message*/
if (isset($_POST['add-book-id']) && isset($_POST['reg_no']) && isset($_POST['submit']))
{
	if (!empty($book_id) && !empty($reg_no))
	{
		header('Location: ./student-search.php?addmessage='.$book_message) ;
	}
}
elseif (isset($_POST['delete-book-id']) && isset($_POST['reg_no']) && isset($_POST['submit']))
{
	if (!empty($book_id) && !empty($reg_no))
	{
		header('Location: ./student-search.php?deletemessage='.$delete_message) ;
	}
}
else
	header('Location: ./student-search.php') ;	



?>