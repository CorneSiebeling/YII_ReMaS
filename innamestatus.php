<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "innamestatus.inc.php");	
     
     $dlist = new clsStatus();
     $page = new clsDefaultPage($dlist, "onderhoud");
	echo $page->getHtml();
?>