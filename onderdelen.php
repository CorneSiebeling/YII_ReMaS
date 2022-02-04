<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "onderdelen.inc.php");	
     
     $dlist = new clsOnderdeel();
     $page = new clsDefaultPage($dlist, "onderhoud");
	echo $page->getHtml();
?>