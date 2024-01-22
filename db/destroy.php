<?php
// 1. pasikreimimas i duombaze
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

//2. id duota per POST'a, siaip reiketu per GET'a
$id = $_POST['id'];


//pries siunciant duomenis i DB, juos reikia paruosti, i uzklausa kintamuju nerasome(kitaip easy school injection atvejams). Paruosimas
//vyksta i uzklausa irasant ?
$sql = "
DELETE FROM trees
WHERE id = ?
";
//nesaugi uzklausa, kurios viduje kintamieji
$stmt = $pdo->prepare($sql); //cia pripierinam uzklausa ir tuomet jau executinam

$stmt->execute([$id]); //sitas kintamasis - masyvas  - perduodamas i ? vieta


header('Location: http://localhost/backEnd/php/db/');