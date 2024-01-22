<?php

$host = '127.0.0.1'; //'localhost'
$db   = 'forest'; //duomenu bases pavadinimas 
$user = 'root'; //useris php myAdmin 
$pass = ''; //slapiko nera
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [ //standartine konfiguracija
  PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, //masyvo indeksas masyvo reiksme
  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
  PDO::ATTR_EMULATE_PREPARES   => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);


//  INSERT INTO table_name (column1, column2, column3, ...)
//    VALUES (value1, value2, value3, ...);

$name = $_POST['name'];
$height = $_POST['height'];
$type = $_POST['type'];


$sql = "
INSERT INTO trees (name, height, type)
  VALUES (?, ?, ?)
";

$stmt = $pdo->prepare($sql); //info ateina  pavyko ar ne irasyti

$stmt->execute([$name, $height, $type]);

header('Location:http://localhost/backEnd/php/db/');
