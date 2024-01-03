<?php
/* 1. Sukurti klasę Kibiras1. Sukurti private savybę akmenuKiekis. Parašyti šiai savybei metodus
 prideti1Akmeni() pridetiDaugAkmenu($kiekis) ir metodą kiekPririnktaAkmenu(). Sukurti kibiro
  objektą ir pademonstruoti akmenų rinkimą į kibirą ir rezultatų išvedimą.*/
require __DIR__ . '/Kibiras1.php';
require __DIR__ . '/Pinigine.php';


$k1 = new Kibiras1;



echo 'Pridedu daug akmenų:' .$k1->pridetiDaugAkmenu(15);

echo '<br> Pridedu dar vieną akmenį:' .$k1->prideti1Akmeni(); ;


echo '<br> Pririnkta akmenų: ' . $k1->kiekPririnktaAkmenu();


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

