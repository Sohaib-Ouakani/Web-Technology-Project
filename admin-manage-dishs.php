<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Volume-Menu";
$templateParams["nome"] = "admin/admin-manage-dishs-template.php";

$templateParams["dishs"] = $dbh->getMenuItems();

require 'template/base.php';
?>