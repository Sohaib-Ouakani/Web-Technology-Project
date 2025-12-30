<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Volume-Menu";
$templateParams["nome"] = "menu-template.php";

$heroPreamble = "Ammira la nostra offerta di piatti";
$heroMain = "Goditi il nostro Menu";
$heroDesc = "Scopri i piatti freschi preparati ogni giorno dalla nostra cucina. Prelibatezze locali e ricette tradizionali per una pausa pranzo indimenticabile.";

$templateParams["menuItems"] = $dbh->getMenuItems();

require 'template/base.php';
?>