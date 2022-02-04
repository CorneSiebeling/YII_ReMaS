<?php
	require_once("includes/includes.php");
	
     unset($_SESSION['logged_in_as']);
     
	$status = "success";
	$tekst = "Uitgelogd";
     $output = '
          <div id="status_result_code">' . $status . '</div>     
          <div id="status_result_msg">' . $tekst . '</div>';     // Moet op 1 regel staan !
     echo $output;
?>