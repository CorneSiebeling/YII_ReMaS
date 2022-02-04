<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "ontleden.inc.php");
     $dlist = new clsOntleden();
     $page = new clsDefaultPage($dlist, "verwerking");
	echo $page->getHtml();
?>