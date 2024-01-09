<?php 
/* 6. Sukurti klasę Stikline. Sukurti privačią savybę turis ir kiekis. Parašyti metodą 
ipilti($kiekis), kuris keistų savybę kiekis. Jeigu stiklinės tūris yra mažesnis nei pilamas 
kiekis- kiekis netelpa ir būna lygus tūriui. Parašyti metodą ispilti(), kuris grąžiną kiekį. 
Pilant išpilamas visas kiekis, tas kas netelpa, nuteka per stalo viršų. Sukurti tris stiklinės 
objektus su tūriais: 200, 150, 100. Didžiausią pripilti pilną ir tada ją ispilti į mažesnę 
stiklinę, o mažesnę į dar mažesnę. */

echo '<br> 6 uzd extends: <br>';

require __DIR__ . '/Stikline.php';

$st100 = new Stikline(100);
$st150 = new Stikline(150);
$st200 = new Stikline(200);


// $st200->ipilti(200);

// $st150->ipilti($st200->ispilti());


// echo "100ml stiklineje liko: " .$st100->ipilti($st150->ispilti()). "<br>"; 



// $st200->ipilti(160);
// print_r($st200);

// $st150->ipilti($st200->ispilti());
// echo "<br> 150ml stiklineje yra: <br>";
// print_r($st150);



echo "<br>";
$st200->ipilti(200);
$st150->ipilti($st200->ispilti());
echo "i 100ml stikline ipyliau: " . $st100->ipilti($st150->ispilti()) . "<br>";

//turi grazinti objekta, kad galtume chaininti, iskart panaudoti kita objekta
