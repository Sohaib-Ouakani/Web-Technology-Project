<?php
require_once 'bootstrap.php';

if (!isUserAdmin()) {
    header("location: login.php");
}

//Base Template
$templateParams["titolo"] = "Volume-Gestisci ordini";
$templateParams["nome"] = "admin/admin-orders-home-template.php";

$templateParams["orders"] = $dbh->getOrdersForAdmin();

require 'template/base.php';
?>