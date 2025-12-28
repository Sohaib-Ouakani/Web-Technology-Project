<?php
    function isUserLoggedIn(){
        return !empty($_SESSION['id']);
    }

    function registerLoggedUser($user){
        $_SESSION["id"] = $user["id"];
        $_SESSION["username"] = $user["username"];
        $_SESSION["surname"] = $user["surname"];
        $_SESSION["name"] = $user["name"];
        $_SESSION["admin"] = $user["isadmin"];
    }
?>