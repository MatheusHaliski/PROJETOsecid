<?php
    $dbServerName = 'localhost';
    $dbUserName = 'root';
    $dbPassword = '';
    $dbName = 'Regionais';

$connection = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);
$sqe = "SELECT * FROM Regionais";
?>