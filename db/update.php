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



$id = $_POST['id'];
$height = $_POST['height'];

/* */

$sql = "
UPDATE trees
  SET height = :h
  WHERE id = :id
";

$stmt = $pdo->prepare($sql);

$stmt->execute([ //nesvarbus eiliskumas, asociatyvus
    'id'=> $id,
    'h'=> $height,
]);

header('Location:http://localhost/backEnd/php/db/');
