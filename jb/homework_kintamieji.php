<h1>Homework </h1>

<?php

/*1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus 
(nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir 
naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". */

$vardas = 'Laima';
$pavarde = 'Pileliene';
$gimimoMetai = 1993;
$dabarMetai = 2023;
$manoMetai = $dabarMetai - $gimimoMetai;



echo "As esu $vardas $pavarde. Man yra $manoMetai metu.";

/* 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() 
 jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės.
  Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.*/

echo "<br>";
echo '2 uzduotis';
echo "<br>";
$pirmasKintamasis = rand(1, 4);
$antrasKintamasis = rand(1, 4);

echo $pirmasKintamasis;
echo "<br>";
echo $antrasKintamasis;
echo "<br>";

// $dalyba= round($pirmasKintamasis/$antrasKintamasis, 2);
//   echo $dalyba;

echo round($pirmasKintamasis / $antrasKintamasis, 2);

/*3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems
 priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį 
 vidurinę reikšmę.
*/
echo "<br>";
echo '----3. uzduotis';
echo '<br>';

$pirmasRand = rand(0, 25);
$antrasRand = rand(0, 25);
$treciasRand = rand(0, 25);


$max = max($pirmasRand, $antrasRand, $treciasRand);
$min = min($pirmasRand, $antrasRand, $treciasRand);
$middle = $pirmasRand;

if ($pirmasRand !== $min && $pirmasRand !== $max) {
  $middle = $pirmasRand;
} else if ($antrasRand !== $min && $antrasRand !== $max) {
  $middle = $antrasRand;
} else {
  $middle = $treciasRand;
}

echo ($pirmasRand . ' ' . $antrasRand . ' ' . $treciasRand);
echo '<br>';
echo ($middle);
echo '<br>';





// 4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija 
// nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą 
// atspausdintų.
echo '<br>';
echo '----4. uzduotis';
echo '<br>';

$aKrastine = rand(1, 10);
$bKrastine = rand(1, 10);
$cKrastine = rand(1, 10);
echo "a = $aKrastine, b = $bKrastine, c = $cKrastine<br>";

$result = false;
if (($aKrastine + $bKrastine > $cKrastine) && ($aKrastine + $cKrastine > $bKrastine) && ($bKrastine + $cKrastine > $aKrastine)) {
  echo 'Galima sudaryti trikampi';
} else {
  echo 'Negalima sudaryti trikampio';
}

/*5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 
(sprendimui masyvo nenaudoti).
 */
echo '<br>';
echo '<br>';
echo '----5. uzduotis';
echo '<br>';
$skaicius1 = rand(0, 2);
$skaicius2 = rand(0, 2);
$skaicius3 = rand(0, 2);
$skaicius4 = rand(0, 2);

$nuliuCount = 0;
$vienetuCount = 0;
$dvejetuCount = 0;

if ($skaicius1 === 0) {
  $nuliuCount++;
} else if ($skaicius1 === 1) {
  $vienetuCount++;
} else if ($skaicius1 === 2) {
  $dvejetuCount++;
}

if ($skaicius2 === 0) {
  $nuliuCount++;
} else if ($skaicius2 === 1) {
  $vienetuCount++;
} else if ($skaicius2 === 2) {
  $dvejetuCount++;
}

if ($skaicius3 === 0) {
  $nuliuCount++;
} else if ($skaicius3 === 1) {
  $vienetuCount++;
} else if ($skaicius3 === 2) {
  $dvejetuCount++;
}

if ($skaicius4 === 0) {
  $nuliuCount++;
} else if ($skaicius4 === 1) {
  $vienetuCount++;
} else if ($skaicius4 === 2) {
  $dvejetuCount++;
}
echo '<br>';
echo "1. = $skaicius1, 2. = $skaicius2, 3. = $skaicius3, 4. = $skaicius4<br>";
echo '<br>';
echo "Nuliu: $nuliuCount, vienetu: $vienetuCount, dvejetu:  $dvejetuCount";

/*6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį 
 atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3> */
echo '<br>';
echo '<br>';
echo '<h3> 6 uzduotis </h3>';
echo '<br>';

$kintamasisInTag = rand(1, 6);

echo "<h1> $kintamasisInTag </h1>";
echo '<br>';
echo "<h$kintamasisInTag> $kintamasisInTag </h$kintamasisInTag>";

/* 7. Naudokite funkcija rand(). Atspausdinkite 3 skaičius nuo -10 iki 10. Skaičiai mažesni už 0 
turi būti žali, 0 - raudonas, didesni už 0 mėlyni. */

echo '<br>';
echo '<h3> 7 uzduotis </h3>';
echo '<br>';

$colorRandom1 = rand(-10, 10);
$colorRandom2 = rand(-10, 10);
$colorRandom3 = rand(-10, 10);
function getColor($num)
{
  if ($num < 0) {
    return 'green';
  } else if ($num === 0) {
    return 'red';
  } else {
    return 'blue';
  }
}
echo "<span style='color: " . getColor($colorRandom1) . ";'>$colorRandom1</span><br>";
echo "<span style='color: " . getColor($colorRandom2) . ";'>$colorRandom2</span><br>";
echo "<span style='color: " . getColor($colorRandom3) . ";'>$colorRandom3</span><br>";

/* 8. Įmonė parduoda žvakes po 1 EUR. Perkant daugiau kaip už 1000 EUR taikoma 3 % nuolaida, 
daugiau kaip už 2000 EUR - 4 % nuolaida. Parašykite programą, kuri skaičiuos žvakių kainą ir 
atspausdintų atsakymą kiek žvakių ir kokia kaina perkama. Žvakių kiekį generuokite ​rand()​ funkcija
 nuo 5 iki 3000. */

echo '<br>';
echo '<h3> 8 uzduotis </h3>';
echo '<br>';
$zvakiuKiekis = rand(5, 3000);
$kokiaKaina = 1;
if ($zvakiuKiekis > 2000) {
  $kokiaKaina = 0.96;
} else if ($zvakiuKiekis > 1000) {
  $kokiaKaina = 0.97;
}
echo "$zvakiuKiekis zvakes po $kokiaKaina";

/* 9. Naudokite funkcija rand(). Sukurkite tris kintamuosius su atsitiktinėm reikšmėm nuo 
0 iki 100. Paskaičiuokite jų aritmetinį vidurkį. Ir aritmetinį vidurkį atmetus tas reikšmes, 
kurios yra mažesnės nei 10 arba didesnės nei 90. Abu vidurkius atspausdinkite. Rezultatus 
apvalinkite iki sveiko skaičiaus. */

echo '<br>';
echo '<h3> 9 uzduotis </h3>';
echo '<br>';
$sk1 = rand(0, 100);
$sk2 = rand(0, 100);
$sk3 = rand(0, 100);

$sum = $sk1 + $sk2 + $sk3;
$average = round($sum / 3);
echo "average yra: $average";
echo '<br>';

$filteredSum = 0;
$filteredCount = 0;

if ($sk1 > 10 && $sk1 < 90) {
  $filteredSum += $sk1;
  $filteredCount++;
}
if ($sk2 > 10 && $sk2 < 90) {
  $filteredSum += $sk2;
  $filteredCount++;
}
if ($sk3 > 10 && $sk3 < 90) {
  $filteredSum += $sk3;
  $filteredCount++;
}

$filteredAverage = 0;
if ($filteredCount > 0) {
  $filteredAverage = round($filteredSum / $filteredCount);
}
echo "all random numbers: $sk1, $sk2, $sk3. <br>";
echo "filered average: $filteredAverage";

/* 10. Padarykite skaitmeninį laikrodį, rodantį valandas, minutes ir sekundes. Valandom, 
 minutėm ir sekundėm sugeneruoti panaudokite funkciją rand(). Sugeneruokite skaičių nuo 0 iki 300. 
 Tai papildomos sekundės. Skaičių pridėkite prie jau sugeneruoto laiko. Atspausdinkite laikrodį 
 prieš ir po sekundžių pridėjimo ir pridedamų sekundžių skaičių.*/

echo '<br>';
echo '<h3> 10 uzduotis </h3>';
echo '<br>';

$minute = rand(0, 59);
$sec = rand(0, 59);
$hour = rand(0, 23);
$randomNumber = rand(0, 300);
echo "laikrodis: $hour h $minute min $sec s <br>";
$allSec = $sec + $randomNumber;

if ($allSec > 59) {
  $minute += floor($allSec / 60);
  $sec= $sec % 60;
}
if ($minute > 59) {
  $hour += floor($minute / 60);
  $minute %= 60;
}
if ($hour > 23) {
  $hour %= 24;
}
echo "visos sekundes: $allSec <br>";
echo "naujas laikrodis: $hour h $minute min $sec s <br>";


/* 11. Naudokite funkcija rand(). Sugeneruokite 6 kintamuosius su atsitiktinem reikšmėm nuo
  1000 iki 9999. Atspausdinkite reikšmes viename strige, išrūšiuotas nuo didžiausios iki 
  mažiausios, atskirtas tarpais. Naudoti ciklų ir masyvų NEGALIMA.*/

echo '<br>';
echo '<h3> 11 uzduotis </h3>';
echo '<br>';
// su kintamojo kintamuoju;