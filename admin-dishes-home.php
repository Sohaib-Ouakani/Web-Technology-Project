<?php
require_once 'bootstrap.php';

if (!isUserAdmin()) {
    header("location: login.php");
}

//Base Template
$templateParams["titolo"] = "Volume-Home menù";
$templateParams["nome"] = "admin/admin-dishes-home-template.php";

$templateParams["dishs"] = $dbh->getMenuItems();

if(isset($_GET["formmsg"])) {
    $templateParams["formmsg"] = $_GET["formmsg"];
}

require 'template/base.php';
?>