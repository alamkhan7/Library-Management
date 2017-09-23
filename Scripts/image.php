<?php

/*Getting full deatil of uploaded file*/
// echo var_dump($_FILES);

/*
 Simple to upload file Not secure method because user can upload any file to your server
 Uploading Specific files
*/

/* 
	getting image file name with extension
	return associative array so key value to get file name as 'name'
*/

if (isset($_FILES['file']['name'])) 
{
	$name = $_FILES['file']['name'] ;

	/* getting file extension e.g jpg */
	$extension = strtolower(substr($name, strpos($name, '.') + 1)) ;

	/* getting file size return in byte e.g 48.7KB = 49958 */
	// $size = $_FILES['file']['size'] ;

	/* if file is image then type will be = image/jpeg */
	$type = $_FILES['file']['type'] ;

	/* 
		when file is uploaded it store in server temporary location so we get the file from that temp location 
	*/

	$temp_location = $_FILES['file']['tmp_name'] ;

	if( isset($name) )
	{
		if(!empty($name))
		{
	 		if ( ($extension=='jpg' || $extension=='jpeg') && $type == 'image/jpeg')
			{
				/* set the location for image where to be saved */
	 			$location = '../Uploaded_Photos/' ;

	 			/* append file name with location */	
	 			if (move_uploaded_file($temp_location, $location.$name) ) 
	 				echo "Uploaded done";
	 			else
	 				echo $message = "Error: Moving a file!";
	 		}
	 		else{
	 			echo $message = "Error: File Type is not jpg or jpeg.";
	 		}
	 	}
	 	else
		{
	 		echo $message =  "Please Upload Photo!";
	 	}
	}
}



?>

 <!-- enctype attribute tell how to encode the data -->
<form action="./image.php" method="POST" enctype="multipart/form-data">
	<input type="file" name="file"><br>
	<input type="submit" value="Submit"><br>
</form>