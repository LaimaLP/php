<?php

/* 8. Patobulinti 2 uždavinio piniginę taip, kad būtų galima skaičiuoti 
kiek piniginėje yra monetų ir kiek banknotų. Parašyti metodą monetos(), 
kuris skaičiuotų kiek yra piniginėje monetų ir metoda banknotai() - 
popierinių pinigų skaičiavimui.*/
require __DIR__ ."/Pinigine.php";
echo "<br> Klase Pinigine <br>";
$p = new Pinigine;

$p->ideti(1);
$p->ideti(3);
$p->ideti(3);
$p->ideti(2);
$p->ideti(5);


echo "Yra pinigu suma: " . $p->skaiciuoti() . "<br>";
echo "Pinigineje monetu yra: " . $p->monetos() . "<br>";
echo "Pinigineje banknotu yra: " . $p->banknotai() . "<br>";
