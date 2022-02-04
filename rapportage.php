<?php
	require_once("includes/includes.php");
     require_once(CLASSES_PATH . "rapportage.inc.php");
	$dlist = new clsRapportage($_GET["r"]);
     $page = new clsDefaultPage($dlist, "rapportage");
	echo $page->getPrintHtml();
?>