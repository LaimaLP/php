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
    echo "<span style='color: $spalva;'>$oneRandom</span> ";

    if ($oneRandom > 150) {
        $countMoreThan150++;
    }
    $bendrasRandom .= $oneRandom . ' ';
    $i++;
}
$spalva2 = $bendrasRandom > 275 ? 'blue' : 'orange';
echo "<span style='color: $spalva2;'>$bendrasRandom</span> ";
echo '<br>';
echo "Sis keicia blogai spalvas:<br> <span style='color: $spalva;'> $bendrasRandom</span>";
echo '<br>';
echo "Didesniu nei 150: $countMoreThan150";

echo "<br> Justo <br>";
$string = '<p>';
for ($i = 0; $i < 300; $i++) {
    $tempRandom = rand(0, 300);
    if ($tempRandom > 257) {
        $string = $string . " <span>$tempRandom</span>";
    } else {
        $string = $string . ' ' . $tempRandom;
    }
}
echo $string . '</p>';

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
echo "<p class='trecias'>$resultWithouDot. <p>";

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
for($i =0; $i<$size; $i++){
    // echo "<p class='ketvirta'> $row <br> </p>";    
}
// echo "<p class='ketvirta'>$sq </p>";

/* 6 Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
Iškritus herbui;
Tris kartus iškritus herbui;
Tris kartus iš eilės iškritus herbui; */

echo '<h1> 6 uzduotis </h1>';
