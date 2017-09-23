<?php

include('Connection.php');

// Check whether  the user is not trying to access this script from URL Directly

$message = "" ;


if ( isset($_POST['submit']) && isset($_FILES['input-photo']['name']) ) 
{
   // Receive Form Data
   $Student_Name = $_POST['student-name'];
   $Reg_Number = $_POST['register-no'];
   $Password = $_POST['password'];
   $Re_Password = $_POST['retype-password'];
   $Section = $_POST['section'];
   $Semester = $_POST['semester'];
   $Batch_No = $_POST['batch'];
   $Phone_Number = $_POST['student-phone'];


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
            $Profile_Picture = $location.$image_name ;
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

    /*End image file code*/
   

   if ( empty($Student_Name) || empty($Reg_Number) || empty($Password) || empty($Re_Password) ||
        empty($Section) || empty($Semester) || empty($Batch_No) || empty($Phone_Number) || 
        empty($image_name) )   
     {
         // Return error to page
         $message = "Please fill the form";
     }

     else
     {
       // whether both passwords are same  
       if  ( $Password === $Re_Password && $Semester != 'none')
        {
          $Q = "CALL Add_Student('$Reg_Number','$Student_Name', '$Section', '$Semester', '$Batch_No',
                '$Phone_Number','$Profile_Picture', '$Password')";
          $Response = mysqli_query($conn,$Q);

          // Check whether the Query Operation Completed or not
          if(!$Response)
		      {
			      $message = "Sorry! failed to add Student" ;
		      }
          else
          {
            $message = "Student Registered Successfully!";  
          }
                      
        }
       else
         {
           $message = "Error: Password not match or semester not select!";     
         }

      }                                                                                        

}



header('Location: ../add-student.php?message='.$message) ;

?>