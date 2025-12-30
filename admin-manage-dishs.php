<?php
require_once 'bootstrap.php';

if (!isUserAdmin()) {
    header("location: login.php");
}

//Base Template
$templateParams["titolo"] = "Volume-Gestisci menù";
$templateParams["nome"] = "admin/admin-manage-dishs-template.php";

$templateParams["dishs"] = $dbh->getMenuItems();

require 'template/base.php';
?>