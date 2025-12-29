<?php
function isUserLoggedIn() {
    return !empty($_SESSION['id']);
}

function registerLoggedUser($user) {
    $_SESSION["id"] = $user["id"];
    $_SESSION["username"] = $user["username"];
    $_SESSION["surname"] = $user["surname"];
    $_SESSION["name"] = $user["name"];
    $_SESSION["admin"] = $user["isadmin"];
}

function getEmptyOrder() {
    return array(
        "DISH_ID" => "", 
        "titoloarticolo" => "", 
        "USER_ID" => "", 
        "OrderDate" => "", 
    );
}

function getActionText($action){
    $result = "";
    switch($action){
        case 1:
            $result = "Inserisci";
            break;
        case 2:
            $result = "Modifica";
            break;
        case 3:
            $result = "Cancella";
            break;
    }

    return $result;
}
?>