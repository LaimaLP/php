<?php
// Klases rasymas ir objektu gaminimas:  klase viena, obj daug.
//pirmiausia norima klase reikia requirintis
require __DIR__ .'/Nso.php';

$nso1 = new Nso (1); //  objektas kurimas su zodeliu NEW ir klases vardo. Objektai isiraso i kintamaji. Ju gali buti daug.

$nso2 = $nso1; 
//perdavimas pagal reference. Objektai PHP'e elgiasi kaip JS'e. Tai cia vienas ir tas pats objektas, norint gauti kita, kuriam is naujo su NEW ir className.
//Masyvas nera objektas, todel priskyre viena prie kito, turim du masyvus.
//JS masyvai yra objektai, o PHP'e ne;

$nso3 = new Nso (3, 'blue');
echo '<pre>';
 
echo $nso1->speed . "<br>";
//kai kreipiames objektas yra nso, speed tampa kintamojo savybe, todel jau be dolerio;

$nso1 ->speed = 'slow';//overwritinamas metodas, jei jis public,
//$nso2->color = 'blue'; //o private overwritinti neina.
echo $nso1->speed . "<br>"; //(objekto savybe pamatome per ri=odykle, iprasta buvo matyti per taska. Klases->savybe pvz gaunam "fast")

// $nso1->__construct(5);
// $nso2->color = "green";

//pasikvieciam funkcija: kvieciam taip pat kaip savybes.
$nso1->goFly();
// $nso2->goSwim();
$nso2->goSwim(); // kviecian privte f-ja, nieko nepavyksta;



print_r($nso1);
print_r($nso2);
print_r($nso3);
echo "labas";



?>

