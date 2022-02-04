<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "uitgifte.inc.php");
     $dlist = new clsUitgifte();
     $page = new clsDefaultPage($dlist, "uitgifte");
	echo $page->getHtml();
?>