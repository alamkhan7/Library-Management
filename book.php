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
      <div class="col-sm-6 col-md-3 category">
        <h4 class="alert alert-success text-center" style="font-weight: bold;">Categories</h4>
        
        <form method="POST">
          <div class="btn-group-vertical"> 
            <button type="submit" class="btn btn-primary" name="Computer-Programming"> Computer Programming </button>
            <button type="submit" class="btn btn-primary" name="Communication"> Communication </button>
            <button type="submit" class="btn btn-primary" name="Image-Processing"> Image Processing</button>
            <button type="submit" class="btn btn-primary" name="Mathematics"> Mathematics </button>
            <button type="submit" class="btn btn-primary" name="Mechanical"> Mechanical </button>
            <button type="submit" class="btn btn-primary" name="Electronics"> Electronics </button>
            <button type="submit" class="btn btn-primary"> Industrial </button>
            <button type="submit" class="btn btn-primary"> Chemical </button>
            <button type="submit" class="btn btn-primary"> Electrical </button>
            <button type="submit" class="btn btn-primary"> Basic </button>
          </div>
        </form>
      </div>

      <?php

        include('./Scripts/connection.php');
        if (isset($_POST['Computer-Programming']))
            $query = "SELECT * FROM book WHERE Category='Programming'";

        elseif (isset($_POST['Communication']))
            $query = "SELECT * FROM book WHERE Category='Communication'";

        elseif (isset($_POST['Image-Processing']))
            $query = "SELECT * FROM book WHERE Category='Image Processing'";

        elseif (isset($_POST['Mathematics']))
            $query = "SELECT * FROM book WHERE Category='Mathematics'";

        elseif (isset($_POST['Mechanical']))
            $query = "SELECT * FROM book WHERE Category='Mechanical'";

        elseif (isset($_POST['Electronics']))
            $query = "SELECT * FROM book WHERE Category='Electronics'";
        else    
            $query = "SELECT * FROM book"; 

        $query_result = mysqli_query($conn,$query);
        
        while ( $Row = mysqli_fetch_assoc($query_result) )
        {
          $Title = substr($Row['Title'],0,15);
          $Book_Cover = substr($Row['Book_Cover'],1);
          $Book_id = $Row['Book_Id'];  
          $Description = substr($Row['Description'],0,100);
     
          echo '<div class="col-sm-6 col-md-3">' ;
          echo '<div class="thumbnail">';
          echo '<img class="media-object" src="'.$Book_Cover.'" alt="Book1" > ';
          echo '<div class="caption">';
          echo '<h3 class="media-heading">'.$Title.'...</h3>';
          echo '<p>'.$Description.' ........ </p>';
          echo '<a href="./book_desc.php?id='.$Book_id.'" class="btn btn-info">more info</a>';
          echo '</div>';
          echo '</div>';
          echo '</div>';
        }
      ?>
    </div> <!-- end of the row  -->


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
