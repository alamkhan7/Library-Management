<?php
require './Scripts/login.php' ;

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
    
    <div class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-4 col-md-4">
      <form action="<?php echo $current_file; ?>" class="form-signin" method="POST">


        <h2 class="form-signin-heading">Please sign in</h2>
        <h5 style="color: red; font-weight: 600">
        <?php
            if ($login_error)
              echo $login_error ;
          ?>
        </h5>
        <label for="inputId" class="sr-only">Username</label>
        <input type="text" id="inputId" name="username" class="form-control" placeholder="Username" required autofocus>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required autofocus>
        <br>
        <!-- <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div> -->
        <input class="btn btn-lg btn-default btn-block" type="submit" value="Sign in">
      </form>
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
