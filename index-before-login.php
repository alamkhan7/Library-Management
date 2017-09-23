<?php
  include './Scripts/login.php' ;
?>

    <div class="col-sm-offset-1 col-sm-10 col-md-offset-0 col-md-3">

      <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title">Login</h1>
        </div>
  
      <div class="panel-body">
        <form action="<?php echo $current_file; ?>" method="POST">
          <h5 style="color: red; font-weight: 600">
          <?php
            if ($login_error)
              echo $login_error ;
          ?>
        </h5>
          <div class="form-group has-feedback">
            <label for="username" class="control-label" class="sr-only">Username</label>
            <input class="form-control" type="text" name="username" placeholder="Username" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
          </div>

          <div class="form-group has-feedback">
            <label for="password" class="control-label" class="sr-only">Password</label>
            <input class="form-control" type="password" name="password" placeholder="Password" required autofocus>
            <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
            <!-- <div class="checkbox">
            <label>
              <input type="checkbox" value="remember-me"> Remember me
            </label>
            </div> -->
          </div>

          <input class="btn btn-default pull-right" type="submit" value="Login">


        </form>
      </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title">Search</h1>
        </div>
  
      <div class="panel-body">
        <form action="#">
          
          <div class="form-group has-feedback">
            <input class="form-control" type="text" id="search" placeholder="Search">
            <span class="glyphicon glyphicon-search form-control-feedback" aria-hidden="true"></span>
          </div>
          <input class="btn btn-default pull-right" type="submit" value="Search">

        </form>
      </div>
    </div>

</div>