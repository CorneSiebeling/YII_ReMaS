<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "inname.inc.php");
     $dlist = new clsInname();
     $page = new clsDefaultPage($dlist, "inname");
	echo $page->getHtml();
?>