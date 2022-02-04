<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "printvrachtbrief.inc.php");	
     
     $dlist = new clsPrintVrachtbrief();
     $page = new clsDefaultPage($dlist, "uitgifte");
	echo $page->getPrintHtml();
?>