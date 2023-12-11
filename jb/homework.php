<h1>Homework </h1>

<?php

/*1. Sukurkite 4 kintamuosius, kurie saugotų jūsų vardą, pavardę, gimimo metus ir šiuos metus 
(nebūtinai tikrus). Parašykite kodą, kuris pagal gimimo metus paskaičiuotų jūsų amžių ir 
naudodamas vardo ir pavardės kintamuosius atspausdintų tokį sakinį :
"Aš esu Vardenis Pavardenis. Man yra XX metai(ų)". */

$vardas='Laima';
$pavarde='Pileliene';
$gimimoMetai=1993;
$dabarMetai=2023;
$manoMetai=$dabarMetai-$gimimoMetai;



echo "As esu $vardas $pavarde. Man yra $manoMetai metu.";

 /* 2. Naudokite funkcija rand(). Sukurkite du kintamuosius ir naudodamiesi funkcija rand() 
 jiems priskirkite atsitiktines reikšmes nuo 0 iki 4. Didesnę reikšmę padalinkite iš mažesnės.
  Atspausdinkite rezultatą jį suapvalinę iki 2 skaičių po kablelio.*/

  echo "<br>";
  echo '2 uzduotis';
  echo "<br>";
  $pirmasKintamasis = rand(1,4);
  $antrasKintamasis = rand(1,4);

  echo $pirmasKintamasis;
  echo "<br>";
  echo $antrasKintamasis;
  echo "<br>";

// $dalyba= round($pirmasKintamasis/$antrasKintamasis, 2);
//   echo $dalyba;

  echo round($pirmasKintamasis/$antrasKintamasis, 2);

/*3. Naudokite funkcija rand(). Sukurkite tris kintamuosius ir naudodamiesi funkcija rand() jiems
 priskirkite atsitiktines reikšmes nuo 0 iki 25. Raskite ir atspausdinkite kintąmąjį turintį 
 vidurinę reikšmę.
*/
echo "<br>";
echo '----3. uzduotis';
echo '<br>';

$pirmasRand = rand(0,25);
$antrasRand = rand(0,25);
$treciasRand = rand(0,25);


$max = max($pirmasRand, $antrasRand, $treciasRand);
$min = min($pirmasRand, $antrasRand, $treciasRand);
$middle = $pirmasRand;

if($pirmasRand !== $min && $pirmasRand !== $max){
    $middle = $pirmasRand;
}else if($antrasRand !== $min && $antrasRand !== $max){
$middle = $antrasRand;
}else{
$middle = $treciasRand;
}

echo($pirmasRand. ' ' .$antrasRand. ' '. $treciasRand);
echo '<br>';
echo($middle);
echo '<br>';





/*4. Įvedami skaičiai -a, b, c –kraštinių ilgiai, trys kintamieji (naudokite ​rand()​ funkcija 
nuo 1 iki 10). Parašykite PHP programą, kuri nustatytų, ar galima sudaryti trikampį ir atsakymą 
atspausdintų. /*

/*5. Sukurkite keturis kintamuosius ir ​rand()​ funkcija sugeneruokite jiems 
reikšmes nuo 0 iki 2. Suskaičiuokite kiek yra nulių, vienetų ir dvejetų. 
(sprendimui masyvo nenaudoti).
 */

 /*6. Naudokite funkcija rand(). Sugeneruokite atsitiktinį skaičių nuo 1 iki 6 ir jį 
 atspausdinkite atitinkame h tage. Pvz skaičius 3- rezultatas: <h3>3</h3> */