<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

</body>

</html>


<h1>Loops</h1>
<?php

/* 1. Naršyklėje nupieškite linija iš 400 “*”. 
Naudodami css stilių “suskaldykite” liniją taip, kad visos žvaigždutės matytųsi ekrane;
Programiškai “suskaldykite” žvaigždutes taip, kad vienoje eilutėje nebūtų daugiau nei 50 “*”; */

echo "<h1> 1 uzduotis </h1>";
echo str_repeat('*', 40);
echo '<br>';

$spausd = "";
for ($i = 0; $i < 40; $i++) {
    $spausd .= "*";
}
echo "Using for loop: $spausd";

$spausd2 = '';
$i = 0;
while ($i < 40) {
    $spausd2 .= "*";
    $i++;
}
echo "<br> Using while: $spausd2";

/* 2. Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais 
ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos 
spalvos.*/
echo "<h1> 2 uzduotis </h1>";

$bendrasRandom = "";
$i = 0;
$countMoreThan150 = 0;
while ($i < 300) {
    $oneRandom = rand(0, 300);
    $spalva = $oneRandom > 275 ? 'red' : 'green';
    // echo "<span style='color: $spalva;'>$oneRandom</span> ";

    if ($oneRandom > 150) {
        $countMoreThan150++;
    }
    $bendrasRandom .= $oneRandom . ' ';
    $i++;
}
$spalva2 = $bendrasRandom > 275 ? 'blue' : 'orange';
// echo "<span style='color: $spalva2;'>$bendrasRandom</span> ";
// echo '<br>';
// echo "Sis keicia blogai spalvas:<br> <span style='color: $spalva;'> $bendrasRandom</span>";
// echo '<br>';
// echo "Didesniu nei 150: $countMoreThan150";

// echo "<br> Justo <br>";
$string = '<p>';
for ($i = 0; $i < 300; $i++) {
    $tempRandom = rand(0, 300);
    if ($tempRandom > 257) {
        $string = $string . " <span>$tempRandom</span>";
    } else {
        $string = $string . ' ' . $tempRandom;
    }
}
// echo $string . '</p>';

/* 3. Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 
3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite 
kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad 
visi rezultatai matytųsi ekrane.*/
echo '<h1> 3 uzduotis </h1>';

$i = 1;
$result = "";
$kiti = '';
while ($i <= rand(3000, 4000)) {
    if ($i % 77 == 0) {
        $result .= $i++ . ',';
    } else {
        $kiti .= $i++ . ',';
    }
}
$resultWithouDot = rtrim($result, ',');
// echo "<p class='trecias'>$resultWithouDot. <p>";

/* 4. Nupieškite kvadratą iš “*”, kurio kraštines sudaro 100 “*”. Panaudokite css stilių, kad kvadratas ekrane atrodytų kvadratinis.
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
* * * * * * * * * * *
*/

echo '<h1> 4 uzduotis </h1>';


$row = str_repeat('*', 100);
$sq = '';
$size = 100;
for ($i = 0; $i < $size; $i++) {
    // echo "<p class='ketvirta'> $row <br> </p>";    
}
// echo "<p class='ketvirta'>$sq </p>";

/* 6 Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas,
 o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu 
 iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai 
 monetos metimą stabdome:
Iškritus herbui;
Tris kartus iškritus herbui;
Tris kartus iš eilės iškritus herbui; */

echo '<h1> 6 uzduotis </h1>';

$metimuSkaicius = 0;
$iskritoHerbas = false;
while (!$iskritoHerbas) {
    $metimuSkaicius++;
    $rezultatas = rand(0, 1);
    switch ($rezultatas) {
        case 0:
            // echo "H<br>";
            $iskritoHerbas = true;
            break;
        case 1:
            // echo "S<br>";
            break;
    }
}
// echo "Moneta nukrito herbu po $metimuSkaicius <br>";

$iskritoHerbas = false;
$herbuSkaicius = 0;
$metimuSkaicius = 0;

while (!$iskritoHerbas) {
    $metimuSkaicius++;
    $rezultatas = rand(0, 1);

    if ($herbuSkaicius === 3) {
        break;
    }
    switch ($rezultatas) {
        case 0:
            $herbuSkaicius++;
            // echo "H<br>";
            break;
        case 1:
            // echo "S<br>";
            break;
    }
}
// echo "Moneta nukrito tris kartus nukrito herbu po $metimuSkaicius<br>";



$iskritoHerbas = false;
$herbuSkaicius = 0;
$metimuSkaicius = 0;

while (!$iskritoHerbas) {
    $metimuSkaicius++;
    $rezultatas = rand(0, 1);

    if ($herbuSkaicius === 3) {
        break;
    }
    switch ($rezultatas) {
        case 0:
            $herbuSkaicius++;
            // echo "H<br>";
            break;
        case 1:
            $herbuSkaicius = 0;
            // echo "S<br>";
            break;
    }
}
// echo "Moneta tris kartus is eiles nukrito herbu po $metimuSkaicius";

/* 7. Kazys ir Petras žaidžiai Bingo. Petras surenka taškų kiekį nuo 10 iki 20, 
Kazys surenka taškų kiekį nuo 5 iki 25. Vienoje eilutėje išvesti žaidėjų vardus su 
taškų kiekiu ir “Partiją laimėjo: ​laimėtojo vardas​”. Taškų kiekį generuokite funkcija ​
rand()​. Žaidimą laimi tas, kas greičiau surenka 222 taškus. Partijas kartoti tol, kol 
kažkuris žaidėjas pirmas surenka 222 arba daugiau taškų. Nenaudoti cikle break.*/
echo '<h1> 7 uzduotis </h1>';

// $petroTaskai = rand(10, 20);
// $kazioTaskai = rand(5, 25);
// if ($petroTaskai > $kazioTaskai) {
//     echo "Partija laimejo Petras: $petroTaskai vs $kazioTaskai <br>";
// } else {
//     echo "Partija laimejo Kazys: $kazioTaskai vs $petroTaskai <br>";
// }

$KazioVisi = 0;
$PetroVisi = 0;
$pasieke222 = false;
while (!$pasieke222) {
    $petroTaskai = rand(10, 20);
    $kazioTaskai = rand(5, 25);
    $KazioVisi += $kazioTaskai;
    $PetroVisi += $petroTaskai;

    if ($KazioVisi >= 222) {
        $pasieke222 = true;
        echo "Laimejo Kazys: $KazioVisi <br>";
    }
    if ($PetroVisi >= 222) {
        $pasieke222 = true;
        echo "Laimejo Petras: $PetroVisi <br>";
    }
}

?>
<!-- /* 8. Reikia nupaišyti pilnavidurį rombą, taip pat, kaip ir pilnavidurį kvadratą 
(https://lt.wikipedia.org/wiki/Rombas), kurio aukštis 21 eilutė. Reikia padaryti, 
kad kiekviena rombo žvaigždutė būtų atsitiktinės RGB spalvos (perkrovus puslapį spalvos 
turi keistis). */  -->

<?php
echo '<h1> 8 uzduotis </h1>';


echo " randomines spalvos kodas: $randomColor <br>";


$row = "";
for ($i = 0; $i <= 10; $i++) {
    $row .= '*';
    $red = rand(0, 255);
    $green = rand(0, 255);
    $blue = rand(0, 255);
    $randomColor =  "rgb($red, $green, $blue)";
    echo "<span  style='color: $randomColor;'>$row <br> </span>";
}
for ($i = 9; $i >= 0; $i--) {
    $row =  substr($row, 0, -1);
    $red = rand(0, 255);
    $green = rand(0, 255);
    $blue = rand(0, 255);
    $randomColor =  "rgb($red, $green, $blue)";
    echo "<span style='color: $randomColor; text-align:center'>$row <br> </span>";
}
/* 10. Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() 
funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
a)“Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite 
kiek reikia smūgių.
b) “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% 
tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į 
vinį. Suskaičiuokite kiek reikia smūgių.*/

echo '<h1> 10 uzduotis </h1>';


$ikalimoGylis = rand(0, 85);

$viniesIlgis = 85;
$kalimuSuma1 = 0;

$smugiu = 0;
$ikaltuVinuSkaicius = 0;
while ($ikaltuVinuSkaicius < 5) {

    while ($kalimuSuma1 < $viniesIlgis) {
        $vienasSmugis = rand(5, 20);

        $kalimuSuma1 += $vienasSmugis;
        $smugiu++;
    }
    $kalimuSuma1=0;
    $ikaltuVinuSkaicius++;
}
echo "Penkioms vinims ikalti reikejo $smugiu smugiu. <br>";

$viniesIlgis = 85;
$kalimuSuma1 = 0;
$visoIkaltasIlgis=0;
$smugiu = 0;
$ikaltuVinuSkaicius = 0;
while ($ikaltuVinuSkaicius <5) {
$pataiko = rand(0,1);
if($pataiko){
    while ($kalimuSuma1 < $viniesIlgis) {
        $vienasSmugis = rand(5, 20);
        $kalimuSuma1 += $vienasSmugis;
        $visoIkaltasIlgis += $vienasSmugis;
        $smugiu++;
    }
    $ikaltuVinuSkaicius++;
    $kalimuSuma1=0;
}
    
    
}
echo "Penkioms vinims ikalti $ikaltuVinuSkaicius reikejo $smugiu dideliu smugiu. Viso ikaltas ilgis: $visoIkaltasIlgis";