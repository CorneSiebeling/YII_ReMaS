<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "gebruikers.inc.php");	
     
     $dlist = new clsGebruiker();
     $page = new clsDefaultPage($dlist, "gebruikers");
	echo $page->getHtml();
?>