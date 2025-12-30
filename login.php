<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && $_POST["password"]){
    $login_result = $dbh->checkLogin($_POST["username"], $_POST["password"]);
    if(count($login_result)==0){
        $templateParams["loginerror"] = "Errore! controllare username o password!";
    }
    else {
        registerLoggedUser($login_result[0]);
    }
}

//Base Template
if(isUserLoggedIn()) {
    if ($_SESSION["admin"]) {
        $templateParams["titolo"] = "Volume-Admin";
        $templateParams["nome"] = "admin-home.php";
    } else {
        $templateParams["titolo"] = "Volume-Utente";
        $templateParams["nome"] = "user-home.php";
        $templateParams["orders"] = $dbh->getFoodOrderByClientId($_SESSION["id"]);
        if(isset($_GET["formmsg"])) {
            $templateParams["formmsg"] = $_GET["formmsg"];
        }
    }
}
else{
    $templateParams["titolo"] = "Volume-Login";
    $templateParams["nome"] = "login-form.php";
}


require 'template/base.php';
?>