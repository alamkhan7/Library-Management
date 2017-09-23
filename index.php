<?php
include_once './Scripts/connection.php' ;
require './Scripts/check_login.inc.php' ;

?>

<!DOCTYPE html>
<html lang="en">

<?php
  require './head.php' ;
?>

<body>

<!-- Start Header -->
<?php
  require './header.php' ;
?>

<!-- End of Header -->

<!-- Start Main Content -->    
<div class="container-fluid main-content">
  <div class="row first-row">
    
    <div class="col-md-offset-0 col-md-9">
      <div class="carousel slide" data-ride="carousel" id="News-Slide">

        <ol class="carousel-indicators">
          <li class="active" data-target="#News-Slide" data-slide-to="0"></li>
          <li class="active" data-target="#News-Slide" data-slide-to="1"></li>
          <li class="active" data-target="#News-Slide" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
          <div class="item active">
            <a href="#"><img src="images/News00.jpg" alt="News"> </a>
          </div>
          <div class="item">
            <a href="#"><img src="images/News00.jpg" alt="News"></a>
          </div>
          <div class="item">
            <a href="#"><img src="images/News00.jpg" alt="News"></a>
          </div>
        </div>
        
        <a href="#News-Slide" role="button" data-slide="next" class="right carousel-control"> <span class="glyphicon glyphicon-chevron-right"></span> </a>
        <a href="#News-Slide" role="button" data-slide="prev" class="left carousel-control"> <span class="glyphicon glyphicon-chevron-left"></span> </a>
    
      </div> <!--  End of carousel -->
      <br>
    </div>
    <!-- end of first column -->

    <?php

      if (loggedin())
        include './index-after-login.php' ;
      else
        include './index-before-login.php' ;
    ?>
 <!-- End of frist-row -->
<div class="clearfix"></div>

 <div class="h2 well well-sm text-warning text-center" style="font-weight: 700">Latest Books</div>

  <div class="row second-row">
    <?php  
      
      /* Connect to Database */
        include('Scripts/connection.php');
        $query = "SELECT * FROM book";
        
        if ($query_result = mysqli_query($conn,$query))
        {
          $i=0;
          while ( $i<8 ) 
          {
            $Row = mysqli_fetch_assoc($query_result);
            $Title = substr($Row['Title'],0,10);
            $Book_Cover = substr($Row['Book_Cover'], 1);
            $Description = substr($Row['Description'],0,100);
            $Book_id = $Row['Book_Id']; 
            echo '<div class="col-xs-6 col-sm-4">'; 
        
            echo '<div class="thumbnail">';
            echo '<img class="media-object"  height="250" style="{max-width : 250px}" src="'.$Book_Cover.'" alt="Book1">';
            echo '<div class="caption">';
            echo '<h3 class="media-heading">'. $Title . ' ...</h3>';
            echo '<p> '.$Description.'......</p>';
            echo '<a href="./book_desc.php?id='.$Book_id.'" class="btn btn-info">more info</a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            $i++;
          }
        }
        else
          echo "Error: Getting Books From Database!";
?>
  </div>
  <!-- End of second-row -->

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
