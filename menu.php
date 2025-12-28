<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Volume-Menu";

$templateParams["nome"] = "menu-template.php";

$templateParams["menuItems"] = $dbh->getMenuItems();


require 'template/base.php';
?>