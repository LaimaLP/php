<?php

require __DIR__ .'/Nso.php';
//objektas ... klase, klase viena, obj daug.
$nso1 = new Nso;

$nso2 = $nso1; //perdavimas pagal reference. Objektai PHP'e elgiasi kaip JS'e. 
//Masyvas nera objektas, todel priskyre viena prie kito, turim du masyvus.
//JS masyvai yra objektai, o PHP'e ne;

$nso3 = new Nso;
echo '<pre>';
 
echo $nso1->speed . "<br>";
//kai kreipiames objektas yra nso, speed tampa kintamojo savybe, todel jau be dolerio;
//overwritinamas metodas, jei jis public
$nso1 ->speed = 'slow';
echo $nso1->speed . "<br>";

// $nso2->color = "green";

//pasikvieciam funkcija: kvieciam taip pat kaip savybes.
$nso1->goFly();
// $nso2->goSwim();




// var_dump($nso1);
// var_dump($nso2);
// var_dump($nso3);
// echo "labas";

?>