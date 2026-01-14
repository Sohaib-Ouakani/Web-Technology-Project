<?php 
require_once 'bootstrap.php';

var_dump($_POST);
echo $_POST["action"];

if(!isUserLoggedIn() || !isset($_POST["action"])) {
    header("location: login.php");
}

if($_POST["action"]==1){
    //Inserisco
    $clientid = htmlspecialchars($_POST["clientid"]);
    $dishid = htmlspecialchars($_POST["dishid"]);
    $dt = DateTime::createFromFormat('Y-m-d\TH:i', $_POST['datetime']);
    $orderdate = $dt->format('Y-m-d H:i:s');
    $iscomplete = $_POST["iscomplete"];


    $orderid = $dbh->insertOrderAdmin($dishid, $clientid, $orderdate, $iscomplete);
    if($orderid!=false){
        $msg = "Inserimento completato correttamente!";
    }
    else{
        $msg = "Errore in inserimento!";
    }

    header("location: admin-orders-home.php?formmsg=".$msg);
}

if($_POST["action"]==2){
    $orderid = $_POST["orderid"];
    $clientid = htmlspecialchars($_POST["clientid"]);
    $dishid = htmlspecialchars($_POST["dishid"]);
    $dt = DateTime::createFromFormat('Y-m-d\TH:i', $_POST['datetime']);
    $orderdate = $dt->format('Y-m-d H:i:s');
    $iscomplete = $_POST["iscomplete"] ?? false;

    if ($dbh->updateOrder($orderid, $dishid, $clientid, $orderdate, $iscomplete)) {
        $msg = "Modifica completata correttamente!";
    } else {
        $msg = "Errore nella modifica";
    }
    header("location: admin-orders-home.php?formmsg=".$msg);
}

if($_POST["action"]==3){
    $orderid = $_POST["orderid"];

    if ($dbh->deleteOrder($orderid)) {
        $msg = "Cancellazione completata correttamente!";
    } else {
        $msg = "Errore nella cancellazione";
    }
    header("location: admin-orders-home.php?formmsg=".$msg);
}
?>