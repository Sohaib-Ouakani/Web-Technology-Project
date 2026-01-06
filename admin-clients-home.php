<?php
require_once 'bootstrap.php';

if (!isUserAdmin()) {
    header("location: login.php");
}

//Base Template
$templateParams["titolo"] = "Volume-Admin clienti";
$templateParams["nome"] = "admin/admin-clients-home-template.php";

$templateParams["clients"] = $dbh->getClients();

if(isset($_GET["formmsg"])) {
    $templateParams["formmsg"] = $_GET["formmsg"];
}

require 'template/base.php';
?>