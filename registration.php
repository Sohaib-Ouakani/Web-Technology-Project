<?php
require_once 'bootstrap.php';

if(isset($_POST["username"]) && $_POST["password"] && $_POST["name"] && $_POST["surname"]){
    $succesfull= $dbh->registerNewUser($_POST["name"], $_POST["surname"], $_POST["username"], $_POST["password"]);
    if(!$succesfull){
        $templateParams["registrationerror"] = "Errore! Username già in uso!";
    }
    else {
        $user = $dbh->checkLogin($_POST["username"], $_POST["password"]);
        registerLoggedUser($user[0]);
        header("location: login.php");
    }
}

$templateParams["titolo"] = "Volume-Registrati";
$templateParams["nome"] = "registration-form.php";

require 'template/base.php';
?>