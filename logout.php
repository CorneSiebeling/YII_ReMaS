<?php
	require_once("includes/includes.php");

     $user = $_SESSION['logged_in_as'];
     echo '
          <h4>Ingelogd als ' . $user['mNaam'] . '</h4></br></br>
          <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4"">
               <a id="button_logout" href="#" class="btn btn-success btn-md">Uitloggen <i class="fa fa-sign-out"></i></a>
          </div>';
?>