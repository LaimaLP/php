<h1> Array </h1>

<?php
echo '<pre>';

/* 1.Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra 
atsitiktiniai skaičiai nuo 5 iki 25. */

echo "<h3> 1 uzduotis </h3>";

$i = 0;
while ($i < 30) {
    $arr[] = rand(5, 25);
    $i++;
}
// print_r($arr);

/*2. Naudodamiesi 1 uždavinio masyvu: 
A. Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;*/

$countOver10 = 0;
foreach ($arr as $item) {
    if ($item > 10) {
        $countOver10++;
    }
}
echo "A. In this array are $countOver10 item over 10.";

// B. Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
$max = max($arr);

$maxValueIndexAll = array_keys($arr, $max);
$maxValueIndex = array_search($max, $arr);
echo "<br> B. Max value in array is $max, it's index in array is $maxValueIndex, if there aro more than one max value, index'es are:" . implode(', ', $maxValueIndexAll);

// Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
$evenIndexesSum = 0;
foreach ($arr as $index => $value) {
    if ($index % 2 == 0) {
        $evenIndexesSum += $value;
    }
}
echo "<br> C. Sum of values which indexes in array are even: $evenIndexesSum";

/* D. Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus 
tos reikšmės indeksas;*/
foreach ($arr as $index => &$value) {
    $newArr[] = $value - $index;
}
echo "<br> D. New array, which values are (value - index):";
// print_r($newArr);

// E.Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
$i = 0;
while ($i < 10) {
    $arr[] = rand(5, 25);
    $i++;
}
// print_r($arr);

// F Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
foreach ($arr as $index => $value) {
    if ($index % 2 === 0) {
        $arrWithEvenIdx[] = $value;
    }
    if ($index % 2 !== 0) {
        $arrWithOddIdx[] = $value;
    }
}
echo "F  array with even indexes:";
// print_r($arrWithEvenIdx);
// print_r($arrWithOddIdx);


// G Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
foreach ($arr as $index => $value) {
    if ($index % 2 === 0 && $value > 15) {
        $arr[$index] = 0;
    }
}
echo "<br>G";
// print_r($arr);


// H Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
//naudojant for each: 
foreach ($arr as $index => $value) {
    if ($value > 10) {
        $minIndex = $index;
        break;
    }
}
echo "<br> $minIndex";

//naudojant array_search:
$firstIndexOver10 = array_search(true, array_map(function ($value) {
    return $value > 10;
}, $arr));

echo "<br> $firstIndexOver10";
// I Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą:
foreach ($arr as $index => $value) {
    if ($index % 2 === 0) {
        unset($arr[$index]);
    }
}
echo "<br> I part";
// print_r($arr);

/*3. Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, 
o ilgis 200. Suskaičiuokite kiek yra kiekvienos raidės.*/
echo "<h3> 3 task </h3>";

$i = 0;
while ($i < 200) {
    $arrLetters[] = chr(rand(ord("A"), ord("D")));
    $i++;
}

// print_r($arrLetters);

$countA = 0;
$countB = 0;
$countC = 0;
$countD = 0;
foreach ($arrLetters as $letter) {
    if ($letter === "A") {
        $countA++;
    }
    if ($letter === "B") {
        $countB++;
    }
    if ($letter === "C") {
        $countC++;
    }
    if ($letter === "D") {
        $countD++;
    }
}
echo "<br> A: $countA, B: $countB, C: $countC, D: $countD";
echo "<h3>nunu nu </h3>";

echo '<br> panaudoju array count values: <br>';
print_r(array_count_values($arrLetters));

// 4. Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
echo '<h3> 4 task </h3>';
sort($arrLetters);



echo "arrLetters: <br>";
// print_r($arrLetters);

echo "Sukurtas masyvas: " . implode(', ', $arrLetters) . "<br>";

/* 5.  Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas
 reikšmes. Paskaičiuokite kiek unikalių (po vieną, nesikartojančių) reikšmių ir kiek unikalių 
 kombinacijų gavote.*/

echo "<h3>5 task </h3> ";
$lettersArray1 = [];
$lettersArray2 = [];
$lettersArray3 = [];

for ($i = 0; $i < 200; $i++) {
    $lettersArray1[] = chr(rand(ord("A"), ord("D")));
    $lettersArray2[] = chr(rand(ord("A"), ord("D")));
    $lettersArray3[] = chr(rand(ord("A"), ord("D")));
};

for ($i = 0; $i < 200; $i++) {
    $joindedArray[] = $lettersArray1[$i] . $lettersArray2[$i] . $lettersArray3[$i];
}

// echo "<br> cia joined array:";
// print_r($joindedArray);
// foreach($bigArr as $letter) {}



$uniqueValuesCount = count(array_count_values($joindedArray));
$uniqueCombinationsCount = count(array_unique($joindedArray));
$unikaliosReiksmes = [];

foreach ($joindedArray as $kombinacija) {
    // Use array_keys to find all occurrences of $kombinacija in $joindedArray
    $key = array_keys($joindedArray, $kombinacija);

    // Check if the count of occurrences is exactly 1
    if (count($key) === 1) {
        $unikaliosReiksmes[] = $kombinacija;
    }
}
// $unikaliosReiksmes = [];

// Tikrinam kokios kombinacijos masyve $joindedArray kartojasi tik 1 karta,
// tai bus unikalios masyvo reiksmes.

// foreach ($joindedArray as $key => $kombinacija) {
//     $key = [];
    // array_keys is $joindedArray masyvo isrenka visus indeksus, kuriu value
    // yra musu konkreti kombinacija ir prideda i $key array,
    // jei $key length yra 1, vadinasi $kombinacija visame $joindedArray masyve
    // kartojasi tik viena karta, todel ta kombinacija pushinam i $unikaliosReiksmes
//     $key = array_keys($joindedArray, $kombinacija);
//     echo "issispausdinu key: ";
//     print_r($key);
//     if(count($key)===1){
//         $unikaliosReiksmes[]=$kombinacija;
//     }
    
// }


echo "Sujungtas masyvas: " . implode(', ', $joindedArray) . "<br>";
echo "Unikalių reikšmių skaičius: <br>";
echo  count($unikaliosReiksmes) ;
echo "<br>Unikalių kombinacijų skaičius: $uniqueCombinationsCount <br>";





/* 6. Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. 
Masyvų ilgiai 100. Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis). */
echo '<h3> 6 task </h3>';
$i = 0;
$j = 0;
$arr1 = [];
$arr2 = [];
while ($i + $j < 200) {
    $randomNr = rand(100, 999);

    if ($i < 100 && !in_array($randomNr, $arr1)) {
        $arr1[] = $randomNr;
        $i++;
    }

    $randomNr2 = rand(100, 999);

    if ($j < 100 && !in_array($randomNr2, $arr2)) {
        $arr2[] = $randomNr2;
        $j++;
    }
}


echo "two unique array:";
echo "First array: ", implode(', ', $arr1) . "<br>";
// print_r($arr1);
echo "First array: ", implode(', ', $arr1) . "<br>";
echo "Second array: ", implode(', ', $arr2) . "<br>";
echo "second unique array:";
// print_r($arr2);

/* 7. Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, kurios yra pirmame 6 uždavinio 
masyve, bet nėra antrame 6 uždavinio masyve. */
echo "<h3> 7 task </h3>";
// print_r(array_diff($arr1, $arr2));
echo "Using array_intersect:", implode(', ', array_diff($arr1, $arr2)) . "<br>";

/* 8. Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose. */
echo "<h3> 8 task </h3>";

// print_r(array_intersect($arr1, $arr2));
echo "Using array_intersect:", implode(', ', array_intersect($arr1, $arr2)) . "<br>";

/* 9. Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, 
o jo reikšmės iš būtų antrojo masyvo. */
echo "<br> 9 task <br>";

$fancyArr = array_combine($arr1, $arr2);
echo "array_combine result:", implode(', ', $fancyArr) . '<br>';
// print_r($fancyArr);

/* 10 Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai 
nuo 5 iki 25. Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. 
Penktas trečio ir ketvirto suma ir t.t. */
echo  '<h3> 10 task </h3>';
$arrOf10 = [];
$arrOf11 = [rand(5, 25), rand(5, 25)];

$arrOf10[] = rand(5, 25);
$arrOf10[] = rand(5, 25);
for ($i = 2; $i < 10; $i++) {

    $arrOf10[] =  $arrOf10[$i - 2] +  $arrOf10[$i - 1];
}

print_r($arrOf11);
print_r($arrOf10);
