<?php
require_once 'bootstrap.php';
if(!isUserAdmin() 
    || !isset($_GET["action"]) 
    || ($_GET["action"]!=1 && $_GET["action"]!=2 && $_GET["action"]!=3) 
    || ($_GET["action"]!=1 && !isset($_GET["id"]))){
    header("location: admin-orders-home.php");
    exit;
}
if ($_GET["action"] != 1) {
    $result = $dbh->getOrderById($_GET["id"]);
    if (count($result) != 0) {
        $templateParams["dish"] = $result[0];
    } else {
        $templateParams["dish"] = null;
    }
} else {
    $templateParams["dish"] = getEmptyOrderForAdmin();
}
//Base Template
$templateParams["titolo"] = "Volume-Gestisci ordine";
$templateParams["nome"] = "admin/admin-order-form.php";

$templateParams["users"] = $dbh->getAllNonAdminClients();
$templateParams["menu"] = $dbh->getMenuItems();

$templateParams["action"] = $_GET["action"];

require 'template/base.php';
?>