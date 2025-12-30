<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
define("UPLOAD_DIR", "./upload/"); 
require_once("utils/functions.php");
require_once("db/database.php");
$dbh = new DatabaseHelper("localhost", "root", "", "volume", 3306);
?>