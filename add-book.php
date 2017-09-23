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
    
    <nav class="col-xs-offset-2 col-xs-8 col-sm-offset-4 col-sm-4 col-md-offset-0 col-md-2 hidden-xs-down bg-faded sidebar well admin-sidebar ">
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

    <div class="col-xs-12 col-sm-12 col-md-10 well admin-table">
      <div class="form-area">  
        <form role="form" action="./Scripts/Add_Book.php" method="POST" enctype="multipart/form-data">
          <br style="clear:both">
          <h4 style="color: green; font-weight: bold;text-align: center;">
            <?php
              if (isset($_GET['message']) && !empty($_GET['message']))
                echo $_GET['message'];
            ?>
          </h4>
          <h3 style="margin-bottom: 25px; text-align: center;">Book Details</h3>
           
           <div class="form-group">
            <input type="text" class="form-control" id="book-id" name="book-id" placeholder="Book ID" size="20" required autofocus>
          </div>         
          
          <div class="form-group">
            <input type="text" class="form-control" id="book-title" name="book-title" placeholder="Book Title" maxlength="300" required autofocus>
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN" autofocus maxlength="13">
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" id="author" name="author" placeholder="Author" required autofocus maxlength="50">
          </div>
          
          <div class="form-group">
            <select class="form-control" name="category" required autofocus>
              <option value="CSE" selected>CSE</option>
              <option value=" Industrial">Industrial</option>
              <option value="Electronics">Electronics</option>
              <option value="Computer">Computer</option>
            /select>
          </div>
          
          <div class="form-group">
            <input type="text" class="form-control" id="published" name="published" placeholder="Published Date" autofocus maxlength="50">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="book-publisher" name="book-publisher" placeholder="Book Publisher" autofocus maxlength="50">
          </div>

          <div class="form-group">
            <input type="text" class="form-control" id="book-edition" name="book-edition" placeholder="Book Edition" autofocus maxlength="4">
          </div>

          <!-- <div class="form-group">
            <input type="text" class="form-control" id="book-condition" name="book-condition" placeholder="Book Condition" required autofocus maxlength="5">
          </div> -->
          
          <div class="form-group">
            <textarea class="form-control" type="textarea" name="Desc" id="description" placeholder="Description" maxlength="500" rows="7" required autofocus></textarea>
            <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
          </div>

          <div class="form-group">
            <textarea class="form-control" type="textarea" name="preface" id="preface" placeholder="Preface" maxlength="500" rows="7" required autofocus></textarea>
            <span class="help-block"><p id="characterLeft1" class="help-block ">You have reached the limit</p></span>                    
          </div>
          
          <div class="form-group">
            <textarea class="form-control" type="textarea" id="content" name="content" placeholder="Content" maxlength="500" rows="7" required autofocus></textarea>
            <span class="help-block"><p id="characterLeft2" class="help-block ">You have reached the limit</p></span>                    
          </div>
          
          <div>
            <!-- image-preview-filename input -->
            <div class="input-group image-preview">
              <input type="text" class="form-control image-preview-filename" placeholder="Upload Book Cover" > <!-- don't give a name === doesn't send on POST/GET -->
              <span class="input-group-btn">
                <!-- image-preview-clear button -->
                <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                <span class="glyphicon glyphicon-remove"></span> Clear
                </button>
                <!-- image-preview-input -->
                <div class="btn btn-default image-preview-input">
                  <span class="glyphicon glyphicon-folder-open"></span>
                  <span class="image-preview-input-title">Browse</span>
                  <input type="file" accept="image/png, image/jpeg, image/gif" name="input-photo" /> <!-- rename it -->
                </div>
              </span>
            </div><!-- /input-group image-preview --> 
          </div>
          <br>
          <button type="submit" id="submit" name="submit" class="btn btn-primary pull-left">Add Book</button>
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
