<?php
include_once './Scripts/check_login.inc.php' ;
?>


<div class="header">
  <img class="logo img-responsive center-block img-thumbnail" src="images/UET Logo.jpg">

   <div class="navigation-container">

    <nav class="navbar navbar-default outter-nav">
        <div class="navbar-header">
        
        <button class="navbar-toggle collapsed" type="button"
                data-toggle="collapse" data-target="#collapsemenu"
                aria-expanded="false">
            
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>  
            
            </button>
        </div>

      <div class="collapse navbar-collapse" id="collapsemenu">
        <ul class="nav navbar-default nav-justified inner-nav">
          <li><a href="./index.php"> Home </a></li>
          <li><a href="./book.php"> Books </a></li>
          <?php
            if(admin_Login())
              echo '<li><a href="./add-book.php"> CPANEL </a></li>' ;
            else
              echo '<li><a href="./profile.php"> Profile </a></li>' ;
          ?>

          <li><a href="./staff.php"> Staff </a></li>
          <li><a href="./staff.php"> About </a></li>
        </ul> 
      </div>
      
    </nav>
     
   </div>

</div>