<?php 
require_once 'bootstrap.php';

if (!isUserAdmin()) {
    header("location: login.php");
    exit;
}

if(!isset($_POST["action"])) {
    header("location: admin-clients-home.php");
    exit;
}

if($_POST["action"]==1){
    //Inserisco
    $name = htmlspecialchars($_POST["name"]);
    $surname = htmlspecialchars($_POST["surname"]);
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);
    $isadmin = isset($_POST["isadmin"]) ? 1 : 0;
    
    $isSuccessfull = $dbh->insertClient($name, $surname, $username, $password, $isadmin);
    if($isSuccessfull){
        $msg = "Inserimento completato correttamente!";
    }
    else{
        $msg = "Errore in inserimento!";
    }
    header("location: admin-clients-home.php?formmsg=".$msg);
}

if($_POST["action"]==2){
    //Modifico
    $clientid = $_POST["clientid"];
    $name = htmlspecialchars($_POST["name"]);
    $surname = htmlspecialchars($_POST["surname"]);
    $username = htmlspecialchars($_POST["username"]);
    $isadmin = isset($_POST["isadmin"]) ? 1 : 0;
    
    // Se la password è stata fornita, la aggiorno
    if (!empty($_POST["password"])) {
        $password = htmlspecialchars($_POST["password"]);
        $result = $dbh->updateClientWithPassword($clientid, $name, $surname, $username, $password, $isadmin);
    } else {
        $result = $dbh->updateClient($clientid, $name, $surname, $username, $isadmin);
    }
    
    if ($result) {
        $msg = "Modifica completata correttamente!";
    } else {
        $msg = "Errore nella modifica";
    }
    header("location: admin-clients-home.php?formmsg=".$msg);
}

if($_POST["action"]==3){
    //Cancello
    $clientid = $_POST["clientid"];
    
    if ($dbh->deleteClient($clientid)) {
        $msg = "Cancellazione completata correttamente!";
    } else {
        $msg = "Errore nella cancellazione";
    }
    header("location: admin-clients-home.php?formmsg=".$msg);
}
?>