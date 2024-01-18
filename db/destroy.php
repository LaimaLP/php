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


// DELETE FROM table_name WHERE condition;

$id = $_POST['id'];

$sql = "
DELETE FROM trees
WHERE id = ?
";
//nesaugi uzklausa, kurios viduje kintamieji
$stmt = $pdo->prepare($sql);

$stmt->execute([$id]);


header('Location: http://localhost/backEnd/php/db/');