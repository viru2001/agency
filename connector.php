<?php
require "PJBridge.php";

$dbHost = "localhost";
$dbName = "";
$dbPort = "3306";
$dbUser = "root";
$dbPass = "root";

// $connStr = "jdbc:mysql-connector-java-8.0.22:T:${dbHost}:${dbName}:${dbPort}";
$connStr =  "jdbc:mysql://localhost:3306/root" ;
$db = new PJBridge();
$result = $db->connect($connStr, $dbUser, $dbPass);
?>

