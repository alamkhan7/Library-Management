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
    <nav class="col-xs-offset-2 col-xs-8 col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-2 hidden-xs-down bg-faded sidebar well admin-sidebar ">
      <ul class="nav nav-pills flex-column ">
        <li class="nav-item">
          <a class="nav-link active" href="./add-book.php">Add New Book <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./add-student.php">Add New Student</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="./student-search.php">Issue/Return</a>
        </li>
      </ul>
    </nav>

    <div class="col-md-offset-2 col-md-6">
    <h5 style="color: red; font-weight: 600">
      <?php
        if(isset($_GET['msg']) && !empty($_GET['msg']))
          echo $_GET['msg'];
      ?>
    </h5>
      <form action="./student-search.php" method="POST">
          
          <h4 style="color: green; font-weight: 800">Enter Student Registeration Number</h4>
          <div class="form-group has-feedback">
            <input class="form-control" type="text" name="search" placeholder="e.g (13PWCSE1078)" required autofocus>
            <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
          </div>
            
          <input class="btn btn-default btn-block btn-primary" type="submit" value="Find">
    </div>
    

  </div> 
  <!-- end of the 2nd row  -->

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
