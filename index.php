<?php
include_once 'assets/config.php'; // Initialize Configs
$page = tsun(@$_GET['page']);
switch ($page) {
case "index":
case "dashboard":
case null:
	$pagename = "Dashboard";
	$getpage = "home";
	break;
}
include_once 'assets/header.php';
include_once 'assets/pages/' . tsun($getpage) . '.php';
include_once 'assets/footer.php';

?>
