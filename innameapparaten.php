<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "innameapparaten.inc.php");	
     
     $dlist = new clsInnameApparaat();
     $page = new clsDefaultPage($dlist, "inname");
	echo $page->getHtml();
?>