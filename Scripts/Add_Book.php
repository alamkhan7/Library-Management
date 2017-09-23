<?php

include('connection.php');

/* Table Structure
	+------------------+--------------+------+-----+---------+-------+
	| Field            | Type         | Null | Key | Default | Extra |
	+------------------+--------------+------+-----+---------+-------+
	| Book_Id          | int(11)      | NO   | PRI | NULL    |       |
	| Title            | varchar(300) | YES  |     | NULL    |       |
	| ISBN             | varchar(13)  | YES  |     | NULL    |       |
	| Author           | varchar(50)  | YES  |     | NULL    |       |
	| Publisher        | varchar(50)  | YES  |     | NULL    |       |
	| Publication_Year | varchar(4)   | YES  |     | NULL    |       |
	| Book_Edition     | varchar(3)   | YES  |     | NULL    |       |
	| Description      | text         | YES  |     | NULL    |       |
	| Preface          | text         | YES  |     | NULL    |       |
	| Contents          | text         | YES  |     | NULL    |       |
	| Book_Cover       | blob         | YES  |     | NULL    |       |
	+------------------+--------------+------+-----+---------+-------+
*/

$message = "" ;

if(isset($_POST['submit']) && isset($_FILES['input-photo']['name']))
{
	$Book_Id = $_POST['book-id']; 	//required
	$Title = $_POST['book-title'];	//required
	$ISBN = $_POST['isbn'];			
	$Author = $_POST['author'];		//required
	$Publisher = $_POST['book-publisher'];
	$Publication_Year = $_POST['published'];
	$Book_Edition = $_POST['book-edition'];
	$Book_Condition = $_POST['book-condition'];
	$Description = $_POST['Desc'];	//required
	$Preface = $_POST['preface'];	//required
	$Contents = $_POST['content'];	//required
	$category = $_POST['category'];


	/* image file code */
   $image_name = $_FILES['input-photo']['name'] ;

  /* if file is image then type will be = image/jpeg */
    $image_type = $_FILES['input-photo']['type'] ;

  /* getting file extension e.g jpg */
    $extension = strtolower(substr($image_name, strpos($image_name, '.') + 1)) ;

  /* 
    when file is uploaded it store in server temporary location so we get the file from that temp location 
  */
    $temp_location = $_FILES['input-photo']['tmp_name'] ;
    
    if( isset($image_name) )
    {
      if(!empty($image_name))
      {
        if ( ($extension=='jpg' || $extension=='jpeg' || $extension=='png' || $extension=='gif') && $image_type == 'image/jpeg')
        {
          /* set the location for image where to be saved */
          $location = '../Uploaded_Photos/' ;

          /* append file name with location */  
          if (move_uploaded_file($temp_location, $location.$image_name) )
          {
            /*Save the file location in database*/
            $Book_Cover = $location.$image_name ;
          }
          else
          { 
              $message = "Error: Store Photo!";
          }
        }
        else
        {
          $message = "Error: File Type is not jpg or jpeg!";
        }
      }
      else
      {
        $message =  "Please Upload Photo!";
      }
    }
    else
      $message =  "Please Upload Photo!";

  	/*End image code*/


	/* add book procedure parameter
	Add_Book(B_Id, B_Title, B_ISBN, B_Author, B_Publisher, Pub_Year , B_Edition, B_Condition , B_Description , B_Preface, B_Contents ,Book_Cover); 
	*/

	if (empty($Book_Id) || empty($Title) || empty($Author) || 
		empty($Description) || empty($Preface) || empty($Contents) || empty($Book_Cover)
		)
	{
		$message = "Please fill the form";
	}
	else
	{
		$Q = "CALL Add_Book('$Book_Id', '$Title', '$ISBN', '$Author','$Publisher','$Publication_Year',
	      '$Book_Edition', 10 , '$Description', '$Preface', '$Contents', '$Book_Cover' , '$category')";

		$Response = mysqli_query($conn,$Q);

		// Check whether the Query Operation Completed or not
		if ( !$Response )
		   {
			 $message = "Soory! Failed To Add New Book" ;
		   }

		else
		     $message = "Book Added Successfully!";
	}
	
}

header('Location: ../add-book.php?message='.$message) ;      
         
?>