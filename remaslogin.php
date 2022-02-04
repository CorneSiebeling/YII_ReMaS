<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "login.inc.php");	
     
     $login = new clsLogin();
     echo $login->getHtml();
?>