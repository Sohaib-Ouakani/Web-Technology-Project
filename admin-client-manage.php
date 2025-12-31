<?php
require_once 'bootstrap.php';

if(!isUserAdmin() 
    || !isset($_GET["action"]) 
    || ($_GET["action"]!=1 && $_GET["action"]!=2 && $_GET["action"]!=3) 
    || ($_GET["action"]!=1 && !isset($_GET["id"]))){
    header("location: admin-clients-home.php");
}

if ($_GET["action"] != 1) {
    $result = $dbh->getClientById($_GET["id"]);
    if (count($result) != 0) {
        $templateParams["client"] = $result[0];
    } else {
        $templateParams["client"] = null;
    }
} else {
    $templateParams["client"] = getEmptyClientForAdmin();
}

//Base Template
$templateParams["titolo"] = "Volume-Gestisci cliente";
$templateParams["nome"] = "admin/admin-client-form.php";

$templateParams["action"] = $_GET["action"];

require 'template/base.php';
?>