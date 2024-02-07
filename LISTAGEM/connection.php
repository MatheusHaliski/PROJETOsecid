<?php
    $dbServerName = 'localhost';
    $dbUserName = 'root';
    $dbPassword = '';
    $dbName = 'Regionais';

$connection = new mysqli($dbServerName, $dbUserName, $dbPassword, $dbName);
$sqe = "SELECT * FROM ServidoresCascavel";
$sqe1 = "SELECT * FROM ServidoresCampoMourao";
$sqe2 = "SELECT * FROM ServidoresCuritiba";
$sqe2A = "SELECT * FROM ServidoresGuarapuava";
$sqe3 = "SELECT * FROM ServidoresLondrina";
$sqe4 = "SELECT * FROM ServidoresMaringa";
$sqe5 = "SELECT * FROM ServidoresPatoBranco";
$sqe6 = "SELECT * FROM ServidoresPontaGrossa";
$sqe7 = "SELECT * FROM ServidoresSantoAntoniodaPlatina";
$sqe8 = "SELECT * FROM ServidoresUmuarama";
$sqe9 = "SELECT * FROM ServidoresUniaodaVitoria";
$ffaf = "SELECT ID AS 'ID',name AS 'Funcionario',DATE_FORMAT(age,'%d-%m-%Y') AS 'data_formatada' ,departament AS 'dep' 
FROM data; ";
?>