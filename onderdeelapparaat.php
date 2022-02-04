<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "apparaat.inc.php");	
     
     $dlist = new clsApparaatComplete();
     $page = new clsDefaultPage($dlist, "onderhoud");
	echo $page->getHtml();
?>