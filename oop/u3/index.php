<?php

require __DIR__ ."/Kibiras2.php";


/* 3. (STATIC) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras2. 
Patobulinkite pridėdami statinę privačią savybę akmenuKiekisVisuoseKibiruose. 
Ši savybė turi rodyti kiek akmenų surinkta visuose Kibiras2 objektuose. Sukurkite 
geterį objekte, ir statinį geterį klasėje, kuris išvestų akmenuKiekisVisuoseKibiruose 
reikšmę. Sukurkite tris kibirus ir pademonstruokite veikimą.
*/ 


$kb1 = new Kibiras2;
$kb2 = new Kibiras2;
$kb3 = new Kibiras2;

$kb1->pridetiDaugAkmenu(7);
$kb2->pridetiDaugAkmenu(10);
$kb2->prideti1Akmeni();
$kb3->pridetiDaugAkmenu(15);
$kb3->pridetiDaugAkmenu(15);
echo " <br> Kiek pririnkta pirmame kibire: <br>";
echo $kb1->kiekPririnktaAkmenu();

echo " <br> Kiek pririnkta antrame kibire: <br>";
echo $kb2->kiekPririnktaAkmenu();

echo " <br> Kiek pririnkta treciame kibire: <br>";
echo $kb3->kiekPririnktaAkmenu();

echo "<br> Viso akmenu pririnkta, result is pirmo kibiro: " . $kb1->getAkmenuKiekisVisuoseKibiruose();
echo "<br> antrame kibire: " . $kb2->getAkmenuKiekisVisuoseKibiruose();
echo "<br> treciame kibire: " . $kb3->getAkmenuKiekisVisuoseKibiruose();
echo Kibiras2::getAkmenuKiekisVisuoseKibiruose();
