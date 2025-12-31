<?php
require_once 'bootstrap.php';
if(!isUserAdmin() 
    || !isset($_GET["action"]) 
    || ($_GET["action"]!=1 && $_GET["action"]!=2 && $_GET["action"]!=3) 
    || ($_GET["action"]!=1 && !isset($_GET["id"]))){
    header("location: admin-dishes-home.php");
    exit;
}
if ($_GET["action"] != 1) {
    $result = $dbh->getDishById($_GET["id"]);
    if (count($result) != 0) {
        $templateParams["dish"] = $result[0];
    } else {
        $templateParams["dish"] = null;
    }
} else {
    $templateParams["dish"] = getEmptyDishForAdmin();
}
//Base Template
$templateParams["titolo"] = "Volume-Gestisci piatto";
$templateParams["nome"] = "admin/admin-dish-form.php";

$templateParams["action"] = $_GET["action"];

require 'template/base.php';
?>