<?php
require './Scripts/connection.php' ;

$login_error = "" ;

if(isset($_POST['username']) || isset($_POST['password']) )
{
  $username = $_POST['username'] ;
  $password = $_POST['password'] ;

  if(!empty($username) && !empty($password))
  {
    // To protect against sql injection we use mysql_real_escape_string() function
    // Which adds escape character and this function can only be used when open valid sql connection 
    // establish or when are connected to mysql database 
    
    $query = "SELECT Student_Reg FROM Account WHERE Student_Reg= '" . mysqli_real_escape_string($conn,$username) . "' AND Password='" .mysqli_real_escape_string($conn,$password) ."' " ;

    if($query_result = mysqli_query($conn,$query))
    {
      $query_num = mysqli_num_rows($query_result) ;
      if ($query_num > 0 )
      {
        $record = mysqli_fetch_assoc($query_result) ;
        $user_id = $record['Student_Reg'] ;
        //echo $user_id = $record['id'] ;

        // Session is start in 135_Return_Current_Page
        // store user_id in session when they login
        $_SESSION['user_id'] = $user_id ;
        
        if ($user_id === '13pwcse1078')
          $_SESSION['admin'] = true ;


        // return back
        header('Location: '.$going_back);

      }
      else
        $login_error = "Invalid Username/Password.<br>";
    }
    else
      $login_error = "You Must Supply Username/Password.<br>";
  }
  else
    $login_error = "Please fill Username/Password.<br>";
}


?>