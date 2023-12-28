<?php
session_start();

//proceso puslapis, is delete ateina ID kuri norim sunaikinti
$id = $_GET['id'] ?? 0; //pasiimam ta id siunciama

$boxes = json_decode(file_get_contents(__DIR__ . '/data/boxes.json'), true); //nuskaitom visus boxus
foreach ($boxes as $index => $box) {
    if ($box['boxId'] == $id) {
        unset($boxes[$index]);
        break;
    }
}
$boxes = array_values($boxes); //reindexina reiksmes, vel padaro masyva.  Po trynimo reikia sunormalizuoti masyva. 
//Su ser taip nereikia.
file_put_contents(__DIR__ . '/data/boxes.json', json_encode($boxes, JSON_PRETTY_PRINT));

$_SESSION['error'] = "Box #$id deleted";

header('Location: http://localhost/backEnd/php/crud/read.php');