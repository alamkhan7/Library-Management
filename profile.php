<?php

require './Scripts/check_login.inc.php' ;

	
	if (loggedin())
        include './profile-after.php' ;
      else
        include './profile-before.php' ;

?>