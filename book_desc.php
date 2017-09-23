<?php
// Connect to Database
include('Scripts/connection.php');

// get Book id from from URL
$Temp = $_GET['id'];
// $Temp is a String 
$ID = intval($Temp);

// Get book resource
$query = "CALL Get_Book_Details('$ID')";

if ( $query_result = mysqli_query($conn,$query) )
  {
    
    if (!$Row = mysqli_fetch_assoc($query_result))
          echo "Error: Getting Row From Get_Book_Details!";
  
  }
else
  echo "Error: Getting Book Resource!";

							
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
    <div class="row first-row book-description">
    
      <div class="col-xs-6 col-sm-6 col-md-4">
       <img src="<?php echo substr($Row['Book_Cover'],1); ?>" class="img-rounded img-responsive" alt="<?php echo $Row['Title']; ?>" width="90%">
      </div> <!-- End of column -->
      
     

      <div class="col-xs-12 col-sm-6 col-md-8">
        <ul class="nav nav-tabs">
          <li class="active"><a href="#detail">Detail</a></li>
          <li><a href="#description">Description</a></li>
          <li><a href="#preface">Preface</a></li>
          <li><a href="#content">Content</a></li>
        </ul>

        <div class="tab-content">

          <div id="detail" class="tab-pane fade in active">
              <h3>Detail</h3>
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
                    <th scope="row">Title :</th>
                    <td> <?php echo $Row['Title']; ?>     </td>
                    <!-- <td>Default color to a particular row or cell</td> -->
                  </tr>
                  <tr class="">
                    <th scope="row">ISBN :</th>
                    <td>  <?php echo $Row['ISBN']; ?> </td>
                    <!-- <td>Active color to a particular row or cell</td> -->
                  </tr>
                  <tr class="">
                    <th scope="row">Book ID :</th>
                    <td>  <?php echo $Row['Book_Id']; ?> </td>
                    <!-- <td>Active color to a particular row or cell</td> -->
                  </tr>
                  <tr class="">
                    <th scope="row">Author :</th>
                    <td> <?php echo $Row['Author']; ?> </td>
                    <!-- <td>A successful or positive action</td> -->
                  </tr>
                  <tr class="">
                    <th scope="row">Published :</th>
                    <td> <?php echo $Row['Publication_Year']; ?> </td>
                    <!-- <td>A successful or positive action</td> -->
                  </tr>
                  <tr class="">
                    <th scope="row">Book Publisher :</th>
                    <td>  <?php echo $Row['Publisher']; ?> </td>
                    <!-- <td>A successful or positive action</td> -->
                  </tr>
                  <tr class="">
                    <th scope="row">Edition :</th>
                    <td> <?php echo $Row['Book_Edition']; ?> </td>
                    <!-- <td>A successful or positive action</td> -->
                  </tr>
                  <tr class="">
                    <th scope="row">Category :</th>
                    <td>  <?php echo $Row['category']; ?> </td>
                    <!-- <td>A successful or positive action</td> -->
                  </tr>
                  <tr class="">
                    <th scope="row">Available Copies :</th>
                    <td>  <?php echo $Row['Book_Copy']; ?> </td>
                    <!-- <td>A successful or positive action</td> -->
                  </tr>
                </tbody>
              </table>
          </div>
          
          <div id="description" class="tab-pane fade in">
            
              <h3>Description</h3>
              <p> <?php echo $Row['Description']; ?>  </p>

          
          </div>

          <div id="preface" class="tab-pane fade">
           
              <h3>Preface</h3>
              <p> <?php echo $Row['Preface']; ?> </p>
          
          </div>
        
          <div id="content" class="tab-pane fade">
            
              <h3>Content</h3>
            <p> <?php echo $Row['Contents']; ?> </p>
           
          </div>
        
        </div> <!-- tab-content -->
      </div> <!-- col-sm-6 col-md-6 -->
    </div> <!-- row first-row -->

<div class="clearfix"></div>
<br> <br>


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
