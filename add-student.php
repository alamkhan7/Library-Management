<?php
  require './Scripts/check_login.inc.php' ;

  if(!admin_login())
    header('Location: ./index.php');

?>

<!DOCTYPE html>
<html lang="en">

<!-- head start -->
  <?php
    require './head.php' ;
  ?>
<!-- head end -->

<body>

<!-- Start Header -->
<?php
  require './header.php' ;

?>
<!-- End of Header -->

<!-- Start Main Content -->    
<div class="container-fluid main-content">
  <div class="row first-row">
    
    <nav class="col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-2 hidden-xs-down bg-faded sidebar well admin-sidebar">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link" href="./add-book.php">Add New Book <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="./add-student.php">Add New Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="././return.php">Issue/Return</a>
        </li>
      </ul>
    </nav>

    <div class="col-sm-12 col-md-10 well admin-table">
      <div class="form-area">  
        <form role="form" action="Scripts/Register_Student.php" method="POST" enctype="multipart/form-data">
          <br style="clear:both">
          <h4 style="color: green; font-weight: bold;text-align: center;">
            <?php
              if (isset($_GET['message']) && !empty($_GET['message']))
                echo $_GET['message'];
            ?>
          </h4>
          <h3 style="margin-bottom: 25px; text-align: center;">Student Inforamtion</h3>
          
          <div class="col-md-6" style="padding-left: 0; padding-right: 0;">
            <div class="form-group">
              <input type="text" class="form-control" id="student-name" name="student-name" placeholder="Student Name" maxlength="50" required>
            </div>
          
            <div class="form-group">
              <input type="text" class="form-control" id="register-no" name="register-no" placeholder="Registeraion Number" required maxlength="20">
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="password" name="password" placeholder="New Password" maxlength="20" required>
            </div>

            <div class="form-group">
              <input type="text" class="form-control" id="retype-password" name="retype-password" placeholder="Retype-Password" maxlength="20" required>
            </div>
            
            <div class="form-group">
              <input type="text" class="form-control" id="section" name="section" placeholder="Section" required maxlength="1">
            </div>
          </div>
          

          <div class="col-md-6" style="padding-left: 1px; padding-right: 1px;">
            <!-- image-preview-filename input [CUT FROM HERE]-->
            <div class="input-group image-preview">
              <input type="text" class="form-control image-preview-filename" placeholder="Upload Profile Pucture" > <!-- don't give a name === doesn't send on POST/GET -->
              <span class="input-group-btn">
                <!-- image-preview-clear button -->
                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                <span class="glyphicon glyphicon-remove"></span> Clear
                </button>
                <!-- image-preview-input -->
                <div class="btn btn-default image-preview-input">
                  <span class="glyphicon glyphicon-folder-open"></span>
                  <span class="image-preview-input-title">Browse</span>
                  <input type="file" accept="image/png, image/jpeg, image/gif" required name="input-photo" /> <!-- rename it -->
                </div>
              </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
          </div>
          <br>
          <div class="form-group">
            <select class="form-control" id="semester" name="semester" required>
              <option value="none" selected>Semester</option>
              <option value="1st">1st</option>
              <option value="2nd">2nd</option>
              <option value="3rd">3rd</option>
              <option value="4th">4th</option>
              <option value="5th">5th</option>
              <option value="6th">6th</option>
              <option value="7th">7th</option>
              <option value="8th">8th</option>
            </select>
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" id="batch" name="batch" placeholder="Batch Number" required maxlength="3">
          </div>

          <div class="form-group">
            <input type="tel" class="form-control" name="student-phone" placeholder="Phone Number" maxlength="11">
          </div>
          
         <button type="submit" id="submit" name="submit" class="btn btn-primary pull-left">Add Student</button>
        </form>
      </div>
    </div>

  </div> 
  <!-- end of the row  -->

</div>    
<!-- End of Main Content -->

  <!-- jQuery library -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Custome JScript File -->
  <script src="js/script.js"></script>
</body>
</html>
