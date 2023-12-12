<?php

//FALSE loginę reikšmę turi kintamieji, kurie yra lygus:

$kintamasis = FALSE;
$kintamasis = 0;
$kintamasis = 0.0;
$kintamasis = '';
$kintamasis = '0';
$kintamasis = "";
$kintamasis = "0";
$kintamasis = []; //Tuščias masyvas
$kintamasis = new stdClass(); //Objektas be narių
$kintamasis = NULL;

/* <=>
spaceship (kosmosas)
5<=>7 gražins -1
5<=>5 gražins 0
5<=>4 gražins 1

*/

$jonas = rand(5, 25);
$petras = rand(10, 20);
echo "Jonas: $jonas Petras: $petras <br>";

if ($jonas > $petras) {
    echo 'Laimejo Jonas';
} else if ($jonas < $petras) {
    echo 'Laimejo Petras';
} else {
    echo 'Lygiosios';
}
echo '<br>';

$kas = null;
var_dump(isset($kas));
//skaiciuoja buvo ar ne padarytas priskyrimas. Jei priskiriama i null, neskaiciuoja kai priskirimo;

echo '<br>';

var_dump($kas === null);
//arba lygus null arba nesetintas, irgi nullas. Bet jei kreipiames i neseinta, gaunam errora.
//undefined nera php kalboje, tik setinti ir ne, jei nesetintas tai nullas, bet priedo dar gaunam erora


//CIKLAI:
for ($k = 1; $k <= 15; $k++) {
    echo "didelis: $k <br>";
    for ($i = 1; $i <= 15; $i++) {
        if (rand(0, 10) > 9) {
            break 2;
        }
        // echo "mazas: $i <br>";
    }
    // echo 'Ciklo pabaiga';
}
for ($k = 1; $k <= 15; $k++) {
    // echo "didelis: $k <br>";

    for ($i = 1; $i <= 15; $i++) {
        if (rand(0, 10) > 9) {
            continue 2; // break 1; continue yra teviniam
        }
        // echo "mazas: $i <br>";
    }
    // echo 'Ciklo pabaiga';
}


for ($k = 1; $k <= 7; $k++) {
    switch ($k) {
        case 1:
            echo 'Vienas<br>';
            continue 2;
        case 2:
            echo 'Du<br>';
            continue 2;
        case 3:
            echo 'Trys<br>';
            continue 2;
        case 4:
            echo 'Keturi<br>';
            continue 2;
        case 5:
            echo 'Penki<br>';
            continue 2;
        case 6:
            echo 'Sesi<br>';
            continue 2;
        default:
            echo 'Nera';
            break;
    }
}

//php match
echo '<br>';

echo 'MATCH()';

echo '<br>';
$k = 3;
$skaicius = match ($k) {
    1 => 'vienas',
    2, 3 => 'du arba trys',
    4 => 'keturi',
    5 => 'penki',
    default => 'nera',
};
echo $skaicius;

$skaicius = match (true) {
    $k > 5 && $k < 10 => 'Daugiau nei penki, bet iki 10',
    $k > 10 => 'Daugiau nei 10',
    default => 'maziau nei 5',
};
echo "<br> match true: $skaicius";
