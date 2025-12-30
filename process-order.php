<?php 
    require_once 'bootstrap.php';

    var_dump($_POST);
    echo $_POST["action"];

    if(!isUserLoggedIn() || !isset($_POST["action"])) {
        header("location: login.php");
    }

    if($_POST["action"]==1){
        //Inserisco
        $dishid = htmlspecialchars($_POST["dishid"]);
        $dt = DateTime::createFromFormat('Y-m-d\TH:i', $_POST['datetime']);
        $mysqlDateTime = $dt->format('Y-m-d H:i:s');
        $userid = $_SESSION["id"];


        $orderid = $dbh->insertOrder($dishid, $userid, $mysqlDateTime);
        if($orderid!=false){
            $msg = "Inserimento completato correttamente!";
        }
        else{
            $msg = "Errore in inserimento!";
        }

        header("location: login.php?formmsg=".$msg);
    }
    if($_POST["action"]==2){
        $orderid = $_POST["orderid"];
        $dishid = htmlspecialchars($_POST["dishid"]);
        $dt = DateTime::createFromFormat('Y-m-d\TH:i', $_POST['datetime']);
        $orderdate = $dt->format('Y-m-d H:i:s');
        $userid = $_SESSION["id"];

        if ($dbh->updateOrderOfUser($orderid, $dishid, $userid, $orderdate)) {
            $msg = "Modifica completata correttamente!";
        } else {
            $msg = "Errore nella modifica";
        }
        header("location: login.php?formmsg=".$msg);
    }
?>