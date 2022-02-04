<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "inname.inc.php");
     $dlist = new clsInnameWijzigen();
     $page = new clsDefaultPage($dlist, "onderhoud");
	echo $page->getHtml();
?>