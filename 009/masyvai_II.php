<h1> Masyvai II </h1>
<pre>
<?php

/* 1. Sugeneruokite masyvą iš 10 elementų, kurio elementai būtų masyvai iš 5 elementų 
su reikšmėmis nuo 5 iki 25.  */
echo '<h3> 1 task </h3>';


function createArr()
{
    $k = 0;
    while ($k < 5) {
        $Marr[] = rand(5, 25);
        $k++;
    }
    return $Marr;
}

$i = 0;
$Barr = [];
$Marr = [];

while ($i < 10) {
    $Barr[] = createArr();
    $i++;
}

// print_r($Barr);

/*2. Naudodamiesi 1 uždavinio masyvu: Suskaičiuokite kiek masyve yra elementų didesnių už 10;*/
echo "<h3> 2task A </h3>";
$countOver10 = 0;
foreach ($Barr as $arr) {
    foreach ($arr as $item) {
        if ($item > 10) {
            $countOver10++;
        }
    }
}

echo $countOver10;

// B Raskite didžiausio elemento reikšmę;
echo "<h3> 2task B </h3>";
$maxValue = max(array_map("max", $Barr));
echo "<br> MaxValue = $maxValue";
// C Suskaičiuokite kiekvieno antro lygio masyvų su vienodais indeksais sumas 
//(t.y. suma reikšmių turinčių indeksą 0, 1 ir t.t.)
echo "<h3> 2task C </h3>";
$sum = [];
foreach ($Barr as $arr) {
    foreach ($arr as $key => $value) {
        if (!isset($sum[$key])) {
            $sum[$key] = 0;
        }
        $sum[$key] += $value;
    }
}
print_r($sum);
//echo "<br>  <br>";
// print_r($Barr);

// D Visus antro lygio masyvus “pailginkite” iki 7 elementų
echo "<h3> 2task D </h3>";
foreach ($Barr as &$arr) {
    while (count($arr) < 7) {
        $arr[] = rand(5, 25);
    }
}
print_r($Barr);

// E Suskaičiuokite kiekvieno iš antro lygio masyvų elementų sumą atskirai ir sumas 
// panaudokite kaip reikšmes sukuriant naują masyvą. T.y. pirma naujo masyvo reikšmė 
// turi būti lygi mažesnio masyvo, turinčio indeksą 0 dideliame masyve, visų elementų sumai 
echo "<h3> 2task E </h3>";

$arrNew = [];
foreach ($Barr as &$arr) {
    $countArrSum = 0;
    foreach ($arr as $item) {
        $countArrSum += $item;
    }
    $arrNew[] = $countArrSum;
}
print_r($Barr);
print_r($arrNew);

// echo implode(", ", $Barr);

// echo implode(",", $arrN);

/* 3. Sukurkite masyvą iš 10 elementų. Kiekvienas masyvo elementas turi būti masyvas 
su atsitiktiniu kiekiu nuo 2 iki 20 elementų. Elementų reikšmės atsitiktinai parinktos 
raidės iš intervalo A-Z. Išrūšiuokite antro lygio masyvus pagal abėcėlę (t.y. tuos kur 
su raidėm). */

echo "<h3> 3 task";
$parentArr = [];

function createArrOfLetters()
{
    $p = 0;
    $childArr = [];
    while ($p < rand(2, 20)) {
        $childArr[] =  chr(rand(ord("A"), ord("Z")));
        $p++;
    }
    return $childArr;
}
// print_r(createArrOfLetters());

while (count($parentArr) < 10) {
    $parentArr[] = createArrOfLetters();
}
echo "Parent arr:";
// print_r($parentArr);

foreach ($parentArr as &$arr) { // [Z,A], [], []
    sort($arr);
}
echo "Sortintas:";
// print_r($parentArr);

/* 4. Išrūšiuokite trečio uždavinio pirmo lygio masyvą taip, kad elementai kurių 
masyvai trumpiausi eitų pradžioje. Masyvai kurie turi bent vieną “K” raidę, visada 
būtų didžiojo masyvo visai pradžioje. */
echo "<h3> 4 task";


usort($parentArr, function ($a, $b) {
    return count($a) - count($b);
});

// print_r($parentArr);


function sortByKandCount($a, $b)
{
    $containsK_a = in_array('K', $a);
    $containsK_b = in_array('K', $b);

    if ($containsK_a && !$containsK_b) {
        return -1;
    } else if (!$containsK_a && $containsK_b) {
        return 1;
    } else {
        return 0;
    }
}
usort($parentArr, 'sortByKandCount');
echo "Sortinta pagal K";
// print_r($parentArr);

/* 5. Sukurkite masyvą iš 30 elementų. Kiekvienas masyvo elementas yra masyvas 
[user_id => xxx, place_in_row => xxx] user_id atsitiktinis unikalus skaičius 
nuo 1 iki 1000000, place_in_row atsitiktinis skaičius nuo 0 iki 100. */
echo "<h3> 5 task </h3>";


function info()
{
    $itemArr = [];
    $itemArr['user_id'] = rand(1, 1000000);
    $itemArr['place_in_row'] = rand(1, 100);
    return $itemArr;
}

$BigArr = [];
$i = 0;
while ($i < 10) {
    $BigArr[] = info();
    $i++;
}
// print_r($BigArr);

/* 6. Išrūšiuokite 5 uždavinio masyvą pagal user_id didėjančia tvarka. 
Ir paskui išrūšiuokite pagal place_in_row mažėjančia tvarka. */
echo "<h3> 6 task </h3>";

function sortasSorte($a, $b)
{
    $sortByID = $a['user_id'] - $b['user_id'];
    if ($sortByID === 0) {
        $sortByID = $b['place_in_row'] - $a['place_in_row'];
    }
    return $sortByID;
}

usort($BigArr, "sortasSorte");

echo "sortinta pagal ID ir row";
// print_r($BigArr);

echo "sortinta pagal place in row";
usort($BigArr, function ($a, $b) {
    $b['place_in_row'] - $a['place_in_row'];
});
// print_r($BigArr);

/* 7. Prie 6 uždavinio masyvo antro lygio masyvų pridėkite dar du elementus: 
name ir surname. Elementus užpildykite stringais iš atsitiktinai sugeneruotų 
lotyniškų raidžių, kurių ilgiai nuo 5 iki 15.*/
echo "<h3> 7 task </h3>";


function genereteRandomString()
{
    $string = '';
    while (strlen($string) < rand(5, 15)) {
        $string .= chr(rand(ord('A'), ord('Z')));
    }
    return $string;
}
echo "generuioju stringaaa";
// echo genereteRandomString();

foreach ($BigArr as &$arr) {
    while (count($arr) < 4) {
        $arr['name'] = genereteRandomString();
        $arr['surname'] = genereteRandomString();
    }
}
echo "didysis arr";
// print_r($BigArr);

/* 8. Sukurkite masyvą iš 10 elementų. Masyvo reikšmes užpildykite pagal taisyklę: 
generuokite skaičių nuo 0 iki 5. Ir sukurkite tokio ilgio masyvą. Jeigu reikšmė yra 
0 masyvo nekurkite. Antro lygio masyvo reikšmes užpildykite atsitiktiniais skaičiais 
nuo 0 iki 10. Ten kur masyvo nekūrėte reikšmę nuo 0 iki 10 įrašykite tiesiogiai. */
echo "<h3> 8 task </h3>";
$eightArr = [];

while (count($eightArr) < 10) {
    $random = rand(0, 5);
    if ($random !== 0) {
        $miniArr = [];
        while (count($miniArr) < $random) {
            $miniArr[] = rand(0, 10);
        }
        $eightArr[] = $miniArr;
    } else {
        $eightArr[] = rand(0, 10);
    }
}
// echo "antro lygio masyvas";
// print_r($miniArr);
echo "tevinis mastyvas";
// print_r($eightArr);


/* 9. Paskaičiuokite 8 uždavinio masyvo visų reikšmių sumą ir išrūšiuokite masyvą 
taip, kad pirmiausiai eitų mažiausios masyvo reikšmės arba jeigu reikšmė yra masyvas,
 to masyvo reikšmių sumos.*/
echo '<h3> 9 task </h3>';
$sumOfminiArr = 0;
$arrofSum = [];

foreach ($eightArr as $arr) {
    if (is_array($arr)) {
        $arrofSum[] = array_sum($arr);
    } else {
        $arrofSum[] = $arr;
    }
}
// print_r($arrofSum);
array_multisort($arrofSum, $eightArr);
echo " Sortinta naudojant array_multisort <br>";
// print_r($eightArr);


function mySort($a, $b){
    $sumA = is_array($a) ? array_sum($a) : $a;
    $sumB = is_array($b) ? array_sum($b) : $b;
    if ($sumA === $sumB) {
        return 0;
    }
    return ($sumA < $sumB) ? -1 : 1;
}
usort($eightArr, 'mySort');
echo "sortintas arr su usort():";
// print_r($eightArr);

/* 10. Sukurkite masyvą iš 10 elementų. Jo reikšmės masyvai iš 10 elementų. 
Antro lygio masyvų reikšmės masyvai su dviem elementais value ir color. Reikšmė 
value vienas iš atsitiktinai parinktų simbolių: #%+*@裡, o reikšmė color atsitiktinai 
sugeneruota spalva formatu: #XXXXXX. Pasinaudoję masyvų atspausdinkite “kvadratą” kurį 
sudarytų masyvo reikšmės nuspalvintos spalva color.*/

echo "<h3> 10 task </h3>";
