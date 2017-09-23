<?php
  require './Scripts/check_login.inc.php' ;

  if(!admin_login())
    header('Location: ./index.php');

  if (isset($_POST['submit']) || isset($_GET['reg']))
  {
    if (empty($_POST['search']) && empty($_GET['reg']))
    {
      header('Location: ./return.php') ;
    }
  }
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
<?php

  include_once './Scripts/connection.php';
  if (!empty($_POST['search']))
    $std_reg = $_POST['search'] ;
  else
    $std_reg = $_GET['reg'] ;

  $query = "CALL Get_Student_Details('$std_reg')";

  if ( $query_result = mysqli_query($conn,$query) )
    {
      if ($query_num = mysqli_num_rows($query_result) > 0 )
      {
        $Row = mysqli_fetch_assoc($query_result) ;
        $Student_Reg = $Row['Student_Reg'] ;
        $Student_Name = $Row['Student_Name'] ;
        $Section = $Row['Section'] ;
        $Semester = $Row['Semester'] ;
        $Batch_Number = $Row['Batch_Number'] ;
        $Mobile = $Row['Mobile'] ;
        $Profile_Picture = substr($Row['Profile_Picture'], 1) ;
      }
      else
      {
          $msg= "Sorry No Record Found!";
          header('Location: ./return.php?msg='.$msg) ;
      }
    }
  else
  {
    $msg=  "Error: To Getting Student Resource!";
    header('Location: ./return.php?msg='.$msg) ;
  }
  
  
?>
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
          <a class="nav-link " href="./return.php">Issue/Return</a>
        </li>
      </ul>
    </nav>

    <div class="clearfix visible-sm-block"></div>
    <div class="clearfix visible-xs-block"></div>

    <div class="col-xs-offset-1 col-xs-6 col-sm-offset-0 col-sm-6 col-md-offset-0 col-md-4" style="margin-left: 10px;margin-right: -80px; ">
     <!--  <h2 class="text-center"><?php echo $Student_Name; ?></h2> -->
      <img src="<?php echo $Profile_Picture; ?>" class="img-thumbnail img-fluid" alt="profile" width="220" height="220">
    </div>
    
    <div class="col-sm-6 col-md-offset-0 col-md-5">
      <table class="table table-hover">
        <!-- <thead>
          <tr>
            <th>Class</th>
            <th class="success">Color</th>
            <th>Description</th>
          </tr>
        </thead> -->
        <tbody>
          <tr class="">
            <th scope="row">Name :</th>
            <td> <?php echo $Student_Name; ?>     </td>
            <!-- <td>Default color to a particular row or cell</td> -->
          </tr>
          <tr class="">
            <th scope="row">Registration NO:</th>
            <td>  <?php echo $Student_Reg; ?> </td>
            <!-- <td>Active color to a particular row or cell</td> -->
          </tr>
          <tr class="">
            <th scope="row">Section :</th>
            <td> <?php echo $Section; ?> </td>
            <!-- <td>A successful or positive action</td> -->
          </tr>
          <tr class="">
            <th scope="row">Batch :</th>
            <td> <?php echo $Batch_Number; ?> </td>
            <!-- <td>A successful or positive action</td> -->
          </tr>
          <tr class="">
            <th scope="row">Total Book Issue :</th>
            <td>  <?php echo 10 ; ?> </td>
            <!-- <td>A successful or positive action</td> -->
          </tr>
          <tr class="">
            <th scope="row">Total Fine :</th>
            <td> <?php echo 200; ?> </td>
            <!-- <td>A successful or positive action</td> -->
          </tr>
        </tbody>
      </table>
    </div>

  </div> 
  <!-- end of 1st row  -->
<br><br>
  <div class="row">

      <div class="col-md-6 well" style="border-radius: 20px;">
        <h4 class="" style="color: black; font-weight: 600">
          <?php
            if (isset($_GET['addmessage']) && !empty($_GET['addmessage']))
              echo $_GET['addmessage'];
            ?>
        </h4>
        <h3 class="text-center alert alert-success" style="font-weight: 600; ">Assign New Book</h3>
        <form role="form" action="Scripts/assign-delete-book.php" method="POST">
          
          <div class="form-group">
            <input type="text" class="form-control" id="book-id" name="add-book-id" placeholder="Book ID" size="11" maxlength="11" required autofocus>
          </div>
          
          <!-- sending registeration number -->
          <input type="hidden" name="reg_no" value="<?php echo "$Student_Reg"; ?>">   

          <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block btn-success">Add</button> <br><br><br><br><br><br><br>

        </form>
      
      </div>

      <div class="col-md-6 well" style="border-radius: 20px;">

        <h4 class="" style="color: red; font-weight: 600">
          <?php
            if (isset($_GET['deletemessage']) && !empty($_GET['deletemessage']))
              echo $_GET['deletemessage'];
            ?>
        </h4>

        <h3 class="text-center alert alert-danger" style="font-weight: 600;">Return Book</h3>
        <form role="form" action="Scripts/assign-delete-book.php" method="POST">

          <div class="form-group">
            <input type="text" class="form-control"  name="delete-book-id" placeholder="Book ID" size="11" maxlength="11" required autofocus>
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="fine" placeholder="Fine" size="11" maxlength="5" required autofocus>
          </div>

          <div class="form-group">
            <input type="text" class="form-control"  name="fine_reason" placeholder="Fine Reason" size="11" maxlength="100" autofocus>
          </div>
            
           <!-- sending registeration number --> 
           <input type="hidden" name="reg_no" value="<?php echo "$Student_Reg"; ?>"> 

          <button type="submit" id="submit" name="submit" class="btn btn-primary btn-block btn-danger">Delete</button> <br><br>

        </form>
      
      </div>
      <!-- end of 1st column -->

      <div style="width: 100%; background-color: white;" class="col-sm-12 col-md-offset-2 col-md-10 dashboard">
        <h2>Dashboard</h2>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Books Tilte</th>
                  <th>Book ID</th>
                  <th>Issue Date</th>
                  <th>Return Date</th>
                  <th>Fine</th>
                  <th>Fine Reason</th>
                </tr>
              </thead>
              <tbody>
                 <?php

include('Scripts/connection.php');
  $ID = $std_reg;
  $Q = "SELECT book.Title, borrow.Book_Id, borrow.Issue_Date, borrow.Return_Date,borrow.Fine, 
        borrow.Fine_Reason from book , borrow where book.Book_Id = borrow.Book_Id AND  Student_Reg='$ID'";
  // Total Fine
  $Query = "SELECT sum(Fine) AS 'Fine' from borrow where Student_Reg='$ID'";
  $Query_Result = mysqli_query($conn,$Query);
  $Fine_Row     = mysqli_fetch_assoc($Query_Result);
  $Total_Fine = $Fine_Row['Fine'];
 // Total Books Issued
  $Query = "select count(*) as 'Total'from borrow WHERE Return_Date is NULL AND Student_Reg='$ID'";
  $Query_TB = mysqli_query($conn,$Query);
  $Q2 = mysqli_fetch_assoc($Query_TB);
  $T_Book = $Q2['Total'];
  
  
  $R = mysqli_query($conn, $Q);
  while ($C = mysqli_fetch_assoc($R) )
    {
      $Title = $C['Title'];
      $Library_Number = $C['Book_Id'];
      $Issue_Date =$C['Issue_Date'];
      $Return_Date = $C['Return_Date'];
      $Fine = $C['Fine'];
      $Fine_Reason = $C['Fine_Reason'];
      if ($Return_Date)
      {
        echo '<tr class="label-warning">';
              echo '<td> '.$Title.' </td>';
              echo '<td> '.$Library_Number.' </td>';
              echo '<td> '.$Issue_Date.' </td>';
              echo '<td> '.$Return_Date.' </td>';
              echo '<td> '.$Fine.' </td>';
              echo '<td> '.$Fine_Reason.' </td>';
        echo '</tr>';
      }
      else
      {
        echo '<tr class="label-success">';
              echo '<td> '.$Title.' </td>';
              echo '<td> '.$Library_Number.' </td>';
              echo '<td> '.$Issue_Date.' </td>';
              echo '<td> '.$Return_Date.' </td>';
              echo '<td> '.$Fine.' </td>';
              echo '<td> '.$Fine_Reason.' </td>';
        echo '</tr>';
      }
    }

                  ?>
                  
              </tbody>
            </table>
            <?php
            echo '<h4>Total Issued:'.$T_Book.'  </h4>';
            echo '<h4>Total Fine: '.$Total_Fine.' </h4>'; 
            ?>
          </div>
          <br><br><br><br><br>
      </div>  
      <!-- end of the 2nd column -->

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
