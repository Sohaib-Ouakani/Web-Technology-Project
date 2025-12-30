<?php
require_once 'bootstrap.php';

if (!isUserAdmin()) {
    header("location: login.php");
}

//Base Template
$templateParams["titolo"] = "Volume-Gestisci ordini";
$templateParams["nome"] = "admin/admin-manage-orders-template.php";

require 'template/base.php';
?>