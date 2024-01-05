<?php
/* 1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. Parašyti šiai savybei metodus
 prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro
  objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.*/
require __DIR__ . '/Kibiras1.php';
require __DIR__ . '/Pinigine.php';

$k1 = new Kibiras1;
$k2 = new Kibiras1;
$k3 = new Kibiras1;

$k1->pridetiDaugAkmenu(15);
$k1->prideti1Akmeni();
echo '<br> Pririnkta akmenų pirmam: ' . $k1->kiekPririnktaAkmenu();

$k2->pridetiDaugAkmenu(15);
echo '<br> Pririnkta akmenų antram: ' . $k2->kiekPririnktaAkmenu();

$k3->prideti1Akmeni();
echo '<br> Pririnkta akmenų treciam: ' . $k3->kiekPririnktaAkmenu();

/* 2. Sukurti klasę Pinigine. Sukurti dvi privačias savybes popieriniaiPinigai ir 
metaliniaiPinigai. Parašyti metodą ideti($kiekis), kuris prideda pinigus į piniginę. 
Jeigu kiekis nedidesnis už 2, tai prideda prie metaliniaiPinigai, jeigu kitaip- prie 
popieriniaiPinigai. Parašykite metodą skaiciuoti(), kuris suskaičiuotų ir atspausdintų 
popieriniaiPinigai ir metaliniaiPinigai sumą. Sukurti klasės objektą ir pademonstruoti veikimą.
 Nesvarbu kokios popierinės kupiūros ir metalinės monetos egzistuoja realiame pasaulyje.
 */
echo "<br> Klase Pinigine <br>";
$p = new Pinigine;

$p->ideti(1);
$p->ideti(3);
$p->ideti(3);
$p->ideti(2);

echo "Yra pinigu suma: " . $p->skaiciuoti();

/* 4. (EXTENDS) Sukurkite klasę kaip pirmame uždavinyje ir pavadinkite Kibiras3. 
Sukurkite dar vieną klasę KibirasNePo1, kuri extendina klasę Kibiras3. KibirasNePo1 
turi naudoti visus tėvinius metodus, bet metodas Prideti1Akmeni() turi pridėti ne vieną
 o atsitiktinį akmenų kiekį nuo 2 iki 5. Sukurkite KibirasNePo1 objektą ir pademonstruokite
  veikimą.*/
echo '<br> 4 uzd extends: <br>';

require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';


$k3 = new Kibiras3;
$k3e = new KibirasNePo1;

echo "Prideti daug akmenu: " . $k3e->pridetiDaugAkmenu(5);
echo '<br>';

echo '<br>';
echo "Kiek pririnkta akmenu KibirasNePo1 objekte: " . $k3e->kiekPririnktaAkmenu();
echo '<br>';

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


/* 7. Sukurti klasę Grybas. Sukurti klasę Krepsys. Krepsys turi konstantą DYDIS lygią
 500. Grybas turi tris privačias savybes: valgomas, sukirmijes, svoris. Kuriant Grybo 
 objektą jo savybės turi būti atsitiktinai priskiriamos taip: valgomas- true arba 
 false, sukirmijes- true arba false ir svoris- nuo 5 iki 45. Eiti grybauti, t.y. 
 Kurti naujus Grybas objektus, jeigu nesukirmijęs ir valgomas dėti į Krepsi objektą, 
 kol bus pririnktas pilnas krepšys nesukirmijusių ir valgomų grybų (gali būti biški 
 daugiau nei DYDIS). */

echo '<br> 7 uzd grybaujam: <br>';

require __DIR__ . '/Grybas.php';
require __DIR__ . '/Krepsys.php';


$krp = new Krepsys;
echo '<pre>';

while ($krp->dydis > $krp->pririnktuSvoris) {
  $krp->deti(new Grybas);
}
echo "Pririnktu grybu svoris: ";
print_r($krp->pririnktuSvoris);
