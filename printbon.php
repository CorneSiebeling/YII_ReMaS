<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "printbon.inc.php");	
     
     $dlist = new clsPrintBon();
     $page = new clsDefaultPage($dlist, "inname");
	echo $page->getPrintHtml();
?>