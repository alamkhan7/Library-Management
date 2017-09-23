<?php
  include './Scripts/get_student_info.php' ;
  $Student_Reg = $Row['Student_Reg'] ;
  $Student_Name = $Row['Student_Name'] ;
  $Section = $Row['Section'] ;
  $Semester = $Row['Semester'] ;
  $Batch_Number = $Row['Batch_Number'] ;
  $Mobile = $Row['Mobile'] ;
  $Profile_Picture = substr($Row['Profile_Picture'], 1) ;
 
  
?>
<div class="col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-3 text-center">
  
  
    <?php 
      if (isset($_SESSION['admin']) && !empty($_SESSION['admin']))
        echo "<h3 style=\"color:red;font-weight: 800;\"> $Student_Name </h3>" ;
      else
       echo "<h3 style=\"color:black;font-weight: 800;\"> $Student_Name </h3>" ;
    ?>
    
    <img src="<?php echo $Profile_Picture; ?>" class="img-circle img-fluid" alt="profile" width="200" height="220">
    
    <br><br>
      
    <a href="./profile.php" class="btn btn-default" > Profile </a>   
    <a href="./Scripts/logout.php" class="btn btn-default"> Logout </a>

    <br><br>
    
    <div class="panel panel-default">
      <div class="panel-heading">
        <h1 class="panel-title">Search</h1>
      </div>
  
      <div class="panel-body">
        <form action="#">
          
          <div class="form-group has-feedback">
            <input class="form-control" type="text" id="search" placeholder="Search">
            <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
          </div>
            
          <input class="btn btn-default pull-right" type="submit" value="Search">

        </form>
      </div>
    </div>
</div>
