<?php
// Connect to Database
include('Scripts/connection.php');

// Getting user data from database with help of session value

 if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))
 $std_reg = $_SESSION['user_id'] ;
// $ID = intval($std_reg);
// Getting Student resource
$query = "CALL Get_Student_Details('$std_reg')";
$query_result = mysqli_query($conn,$query);

$Row = mysqli_fetch_assoc($query_result) ;

$Student_Reg = $Row['Student_Reg'] ;
$Student_Name = $Row['Student_Name'] ;
$Section = $Row['Section'] ;
$Semester = $Row['Semester'] ;
$Batch_Number = $Row['Batch_Number'] ;
$Mobile = $Row['Mobile'] ;
$Profile_Picture = substr($Row['Profile_Picture'], 1) ;
 
  
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

        <div class="col-sm-offset-3 col-sm-6 col-md-offset-0 col-md-3 text-center well well-sm profile">
          <h2 class="">Profile</h2>
          <img src="<?php echo $Profile_Picture; ?>" class="img-circle img-fluid" alt="profile" width="200" height="220">
          <h4 class="well"><?php echo $Student_Name; ?></h4>
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>Computer System</td>
              </tr>
              <tr>
                <td>Semester: <?php echo $Semester; ?></td>
              </tr>
              <tr>
                <td>Reg #: <?php echo $Student_Reg; ?></td>
              </tr>
              <tr>
                <td>Section <?php echo $Section; ?></td>
              </tr>
              <tr>
                <td>Batch <?php echo $Batch_Number; ?></td>
              </tr>
            </tbody>
          </table>
          <a href="./Scripts/logout.php" type="button" class="btn btn-default"> Logout </a>
        </div>
        <!-- end of first column -->

        <div class="col-sm-12 col-md-9 well dashboard">
          <h2>Dashboard</h2>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>Books Tilte</th>
                  <th>Library Number</th>
                  <th>Issue Date</th>
                  <th>Return Date</th>
                  <th>Fine</th>
                  <th>Fine Reason</th>
                </tr>
              </thead>
              <tbody>
<?php
                    // $head1 = 'Books Tilte' ;
                    // $head2 = 'Library Number' ;
                    // $head3 = 'Issue Date';
                    // $head4 = 'Return Date';
                    // $head5= 'Fine';
                    // $head6 = 'Fine Reason';

                  // $book_list = array('book_title' => 'C++ How To Program',
                  //                      'library_no' => '123456',
                  //                      'library_no' => '123456',
                  //                      'issue_date' => '1/4/2016',
                  //                      'return_date' => '1/6/2016',
                  //                      'fine' => '40',
                  //                      'fine_reason' => 'Missing Pages'
                  //                     );
include('Scripts/connection.php');
  $ID = $_SESSION['user_id'];
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
      // if ($R)
      //       echo "Query Succeded";
      // else
      //       echo "Query Failed";
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
/*                  for ($i=0; $i < 10 ; $i++) 
                  { 
                    echo "<tr> " ;

                    foreach ($book_list as $key => $value) 
                    {
                      echo "<td> {$value} </td>";
                    }

                    echo "</tr> " ;
                  }
*/                  
                ?>

              </tbody>
            </table>
            <?php
            echo '<h4>Total Issue: '.$T_Book.' </h4>';
            echo '<h4>Total Fine: '.$Total_Fine.' </h4>'; 
            ?>
          </div>
        </div>  
        <!-- end of the 2nd column -->

  </div> 
  <!-- end of the row  -->


  <!-- Footer start -->
  <?php
    require './footer.php' ;
  ?>
  <!-- Footer End -->

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
