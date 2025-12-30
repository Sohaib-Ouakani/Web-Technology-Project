<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Volume-Piatti del giorno";
$templateParams["nome"] = "menu-template.php";

$heroPreamble = "Cosa c'è di buono oggi?";
$heroMain = "Il Menu del Giorno";
$heroDesc = "Ogni giorno una selezione di piatti preparati freschi dal nostro chef. Cogli l'attimo non rimarrano per sempre!";

$templateParams["menuItems"] = $dbh->getSpecialMenuItems();

require 'template/base.php';
?>   