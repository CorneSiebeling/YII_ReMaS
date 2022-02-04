<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "apparaten.inc.php");	
     
     $dlist = new clsApparaatComplete();
     $page = new clsDefaultPage($dlist, "onderhoud");
	echo $page->getHtml();
?>