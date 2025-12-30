<?php
require_once 'bootstrap.php';

if (!isUserAdmin()) {
    header("location: login.php");
}

//Base Template
$templateParams["titolo"] = "Volume-Gestisci clienti";
$templateParams["nome"] = "admin/admin-manage-clients-template.php";

$templateParams["dishs"] = $dbh->getClients();

require 'template/base.php';
?>