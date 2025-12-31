<?php 
require_once 'bootstrap.php';
if (!isUserAdmin()) {
    header("location: login.php");
    exit;
}
if(!isset($_POST["action"])) {
    header("location: admin-dishes-home.php");
    exit;
}

if($_POST["action"]==1){
    //Inserisco
    $name = htmlspecialchars($_POST["name"]);
    $description = htmlspecialchars($_POST["description"]);
    $special = isset($_POST["special"]) ? 1 : 0;

    // Gestione upload immagine
    $imagepath = "";
    if(isset($_FILES["dishimg"]) && $_FILES["dishimg"]["error"] == 0) {
        $filename = basename($_FILES["dishimg"]["name"]);
        $targetPath = UPLOAD_DIR . $filename;
        
        if(move_uploaded_file($_FILES["dishimg"]["tmp_name"], $targetPath)) {
            $imagepath = $filename;
        } else {
            $msg = "Errore nell'upload dell'immagine!";
            header("location: admin-dishes-home.php?formmsg=".$msg);
            exit;
        }
    } else {
        $msg = "Immagine obbligatoria per l'inserimento!";
        header("location: admin-dishes-home.php?formmsg=".$msg);
        exit;
    }
    
    $isSuccessfull = $dbh->insertDish($name, $description, $imagepath, $special);
    if($isSuccessfull){
        $msg = "Inserimento completato correttamente!";
    }
    else{
        $msg = "Errore in inserimento!";
    }
    header("location: admin-dishes-home.php?formmsg=".$msg);
}

if($_POST["action"]==2){
    //Modifico
    $dishid = $_POST["dishid"];
    $name = htmlspecialchars($_POST["name"]);
    $description = htmlspecialchars($_POST["description"]);
    $special = isset($_POST["special"]) ? 1 : 0;
    
    // Gestione upload nuova immagine (opzionale in modifica)
    $imagepath = null;
    if(isset($_FILES["dishimg"]) && $_FILES["dishimg"]["error"] == 0) {
        $filename = basename($_FILES["dishimg"]["name"]);
        $targetPath = UPLOAD_DIR . $filename;
        
        if(move_uploaded_file($_FILES["dishimg"]["tmp_name"], $targetPath)) {
            $imagepath = $filename;
        } else {
            $msg = "Errore nell'upload dell'immagine!";
            header("location: admin-dishes-home.php?formmsg=".$msg);
            exit;
        }
    }
    
    // Se è stata caricata una nuova immagine, aggiorno anche il path
    if ($imagepath !== null) {
        $result = $dbh->updateDishWithImage($dishid, $name, $description, $imagepath, $special);
    } else {
        $result = $dbh->updateDish($dishid, $name, $description, $special);
    }
    
    if ($result) {
        $msg = "Modifica completata correttamente!";
    } else {
        $msg = "Errore nella modifica";
    }
    header("location: admin-dishes-home.php?formmsg=".$msg);
}

if($_POST["action"]==3){
    //Cancello
    $dishid = $_POST["dishid"];
    
    if ($dbh->deleteDish($dishid)) {
        $msg = "Cancellazione completata correttamente!";
    } else {
        $msg = "Errore nella cancellazione";
    }
    header("location: admin-dishes-home.php?formmsg=".$msg);
}
?>