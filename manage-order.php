<?php
require_once 'bootstrap.php';

if(!isUserLoggedIn() || !isset($_GET["action"]) || ($_GET["action"]!=1 && $_GET["action"]!=2 && $_GET["action"]!=3) || ($_GET["action"]!=1 && !isset($_GET["id"]))){
    header("location: login.php");
}

if ($_GET["action"] != 1) {
    $result = $dbh->getOrderByOrderIdAndClient($_GET["id"], $_SESSION["id"]);
    if (count($result) != 0) {
        $templateParams["order"] = $result[0];
    } else {
        $templateParams["order"] = null;
    }
} else {
    $templateParams["order"] = getEmptyOrder();
}

//Base Template
$templateParams["titolo"] = "Volume - Nuovo ordine";
$templateParams["nome"] = "user-form.php";

$templateParams["menu"] = $dbh->getMenuItems();

$templateParams["action"] = $_GET["action"];

require 'template/base.php';
?>