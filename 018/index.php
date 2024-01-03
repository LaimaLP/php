<?php

require __DIR__ . "/Afrika.php";
require __DIR__ . "/Dramblys.php";
require __DIR__ . "/Krokodilas.php";


// $afrika = new Afrika;
$dramblys = new Dramblys;
$krokodilas = new Krokodilas;


// echo $afrika->zemynas . '<br>';
// echo $afrika->gyventojai . '<br>';
echo $dramblys->pavadinimas . '<br>';
echo $dramblys->zemynas . '<br>';
echo '<pre>';
var_dump($dramblys);
echo $krokodilas->pavadinimas . '<br>';
echo $krokodilas->zemynas . '<br>';




