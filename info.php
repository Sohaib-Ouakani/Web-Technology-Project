<?php
require_once 'bootstrap.php';

//Base Template
$templateParams["titolo"] = "Volume-Info";
$templateParams["nome"] = "info-template.php";

$teamMembers = [
    [
        "name" => "Alessandro",
        "surname" => "Gardini",
        "email" => "alessandro.gardini7@studio.unibo.it"
    ],
    [
        "name" => "Lorenzo",
        "surname" => "Rossi",
        "email" => "lorenzo.rossi50@studio.unibo.it"
    ],
    [
        "name" => "Sohaib",
        "surname" => "Ouakani",
        "email" => "sohaib.ouakani@studio.unibo.it"
    ]
];

require 'template/base.php';
?>