<?php
require_once 'bootstrap.php';

if (!isUserAdmin()) {
    header("location: login.php");
}

//Base Template
$templateParams["titolo"] = "Volume-Gestisci clienti";
$templateParams["nome"] = "admin/admin-clients-home-template.php";

$templateParams["clients"] = $dbh->getClients();

require 'template/base.php';
?>