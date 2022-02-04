<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "uitgifte.inc.php");
     $dlist = new clsUitgifteWijzigen();
     $page = new clsDefaultPage($dlist, "onderhoud");
	echo $page->getHtml();
?>