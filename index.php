<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Volume-Home";
$templateParams["nome"] = "home.php";

$templateParams['cards'] = [
    [
        "title" => "Questo piatto speciale",
        "description" => "Scopri il nostro menù del giorno, con proposte sane e gustose create dal nostro chef.
        Prenota in anticipo e assicurati il tuo pranzo preferito.",
        "image" => "home_first.jpg",
    ],
    [
        "title" => "Un’esperienza più smart",
        "description" => "Accedi con il tuo account direttamente dal sito.
        Semplice, veloce e sostenibile — senza sprechi.",
        "image" => "home_second.jpeg",
    ],
    [
        "title" => "Ancora un motivo per venire",
        "description" => "Ogni caffè servito sostiene progetti universitari e iniziative studentesche.
        Da Volume, ogni pausa fa bene anche alla comunità.",
        "image" => "home_third.jpeg",
    ]
];

require 'template/base.php';
?>