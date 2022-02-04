<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "rapporten.inc.php");	
     
     $dlist = new clsRapport();
     $page = new clsDefaultPage($dlist, "onderhoud");
	echo $page->getHtml();
?>