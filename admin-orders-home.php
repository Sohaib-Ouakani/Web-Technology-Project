<?php
require_once 'bootstrap.php';

if (!isUserAdmin()) {
    header("location: login.php");
}

//Base Template
$templateParams["titolo"] = "Volume-Admin ordini";
$templateParams["nome"] = "admin/admin-orders-home-template.php";

$templateParams["orders"] = $dbh->getOrdersForAdmin();

if(isset($_GET["formmsg"])) {
    $templateParams["formmsg"] = $_GET["formmsg"];
}

require 'template/base.php';
?>