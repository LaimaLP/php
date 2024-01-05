<?php
require __DIR__ ."/Tenisininkas.php";

$t1 =  Tenisininkas:: sukurtiZaideja("Gvidas");
$t2 =  Tenisininkas:: sukurtiZaideja("Laima");

// $t1->zaidimoPradzia();
echo "<pre>";

var_dump($t1->arTuriKamuoliuka());
var_dump($t2->arTuriKamuoliuka());

Tenisininkas::zaidimoPradzia();


echo "<br> zaidimo pradzia <br>";


var_dump($t1->arTuriKamuoliuka());
var_dump($t2->arTuriKamuoliuka());



$t1->perduotiKamuoliuka();
echo "<br> bando pirmasis perduoti <br>";

var_dump($t1->arTuriKamuoliuka());
var_dump($t2->arTuriKamuoliuka());


$t2->perduotiKamuoliuka();
echo "<br> bando antrasis perduoti <br>";

var_dump($t1->arTuriKamuoliuka());
var_dump($t2->arTuriKamuoliuka());