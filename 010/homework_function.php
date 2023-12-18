<h1> Function </h1>
echo
<pre>;
<?php

//1.Parašykite funkciją, kurios argumentas būtų tekstas, kuris yra įterpiamas į h1 tagą;
function first($text)
{

    return "<h1> $text </h1>";
}

echo first('laaabas');

/* 2. Parašykite funkciją su dviem argumentais, pirmas argumentas tekstas, įterpiamas į
 h tagą, o antrasis tago numeris (1-6). Rašydami šią funkciją remkitės pirmame 
 uždavinyje parašytą funkciją;*/

function second($text, $num)
{
    return "<h$num>$text</h$num>";
}
$text = "cia yra pavadinimas";
$num = 5;
echo second($text, $num);

/* 3. Generuokite atsitiktinį stringą, pasinaudodami kodu md5(time()). 
Visus skaitmenis stringe įdėkite į h1 tagą. Raides palikite. 
Jegu iš eilės eina keli skaitmenys, juos į tagą reikią dėti kartu 
(h1 atsidaro prieš pirmą ir užsidaro po paskutinio) Keitimui naudokite pirmo patobulintą 
(jeigu reikia) uždavinio funkciją ir preg_replace_callback();*/
echo "<h3> 3 task </h3>";

echo md5(time());

function genereteRandomString()
{
    $randomString = md5(time());
    return $randomString;
}
$pattern = '/\d+/';

$callback = function ($matches) {
    return " <h1> .$matches[0]. </h1>";
};

$result = preg_replace_callback($pattern, $callback, genereteRandomString());
// echo $result;

/* 4. Parašykite funkciją, kuri skaičiuotų, iš kiek sveikų skaičių jos argumentas 
dalijasi be liekanos (išskyrus vienetą ir patį save) Argumentą užrašykite taip, kad būtų
 galima įvesti tik sveiką skaičių; */
echo "<h3> 4 task </h3>";
function four($number)
{
    if (is_int($number)) {
        $count = 0;
        for ($i = 2; $i < $number; $i++) {
            if ($number % $i === 0) {
                $count++;
            }
        }

        return $count;
    } else {
        return "nesveikas";
    }
}


// echo four($numberis);

/* 5. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai 
nuo 33 iki 77. Išrūšiuokite masyvą pagal daliklių be liekanos kiekį mažėjimo tvarka, 
panaudodami ketvirto uždavinio funkciją. */

echo '<h3> 5 task </h3>';
$arr = [];
while (count($arr) < 100) {
    $arr[] = rand(33, 77);
}
// print_r($arr);
echo implode(',', $arr);

usort($arr, function ($a, $b) {
    return four($a) - four($b);
});

echo '<h3> atsakymas </h3>';
// print_r ($arr);
echo implode(',', $arr);

/* 6. Sugeneruokite masyvą iš 100 elementų, kurio reikšmės atsitiktiniai skaičiai nuo
 333 iki 777. Naudodami 4 uždavinio funkciją iš masyvo ištrinkite pirminius skaičius.*/
echo "<h3> 6 task </h3>";
$arr6 = [];
while (count($arr6) < 100) {
    $arr6[] = rand(333, 777);
}
echo implode(", ", $arr6);
echo "<br>";
$count = 0;
foreach ($arr6 as $key => $value) {

    if (four($arr6[$key]) === 0) {
        unset($arr6[$key]);
        $count++;
    }
}
echo "$count <br>";
echo implode(", ", $arr6);

$withouPrimary = array_filter($arr6, function ($number) {
    return four($number) > 0;
});
echo "<br> atsakymas : <br>";
echo implode(", ", $withouPrimary);

/* 7. Sugeneruokite atsitiktinio (nuo 10 iki 20) ilgio masyvą, kurio visi, išskyrus 
paskutinį, elementai yra atsitiktiniai skaičiai nuo 0 iki 10, o paskutinis masyvas, 
kuris generuojamas pagal tokią pat salygą kaip ir pirmasis masyvas. Viską pakartokite 
atsitiktinį nuo 10 iki 30  kiekį kartų. Paskutinio masyvo paskutinis elementas yra 
lygus 0;*/
echo "<h3>  7 task </h3>";

// $arrLength = rand(10, 20);
// $pirmas = [];
// while (count($pirmas) < $arrLength - 1) {
//     $pirmas[] = rand(0, 10);
// }

function generateRandomLengthArr($min, $max, $length)
{
    $arr = [];
    $i = 0;
    while ($i < $length) {
        $arr[] = rand($min, $max);
        $i++;
    }
    return $arr;
}
echo "generate random length arr:";

$dynamicArr = generateRandomLengthArr(0, 10, rand(10, 20) - 1);
$dynamicArr[] = 0;

$j = 0;
while ($j < rand(1, 5)) {
    $newArr = [];

    $newArr = generateRandomLengthArr(0, 10, rand(10, 20) - 1);
    $newArr[] = $dynamicArr;

    $dynamicArr = $newArr;
    $j++;
}


echo "<br>nu n u n un u dyyynamic <br> ";
print_r($dynamicArr);


/* 8. Suskaičiuokite septinto uždavinio elementų, kurie nėra masyvai, sumą. 
Skaičiuoti reikia visuose masyvuose ir submasyvuose.*/
echo '<h3> 8 task </h3>';
function sumOfNonArrayElements($arr)
{
    $sum = 0;
    foreach ($arr as $item) {
        if (is_array($item)) {
            $sum += sumOfNonArrayElements($item);
        } else {
            $sum += $item;
        }
    }
    return $sum;
}
$totalSUm = sumOfNonArrayElements($dynamicArr);
echo "total suma: $totalSUm";

/* 9. Sugeneruokite masyvą iš trijų elementų, kurie yra atsitiktiniai skaičiai 
nuo 1 iki 33. Jeigu tarp trijų paskutinių elementų yra nors vienas ne pirminis 
skaičius, prie masyvo pridėkite dar vieną elementą- atsitiktinį skaičių nuo 1 iki 33. 
Vėl patikrinkite pradinę sąlygą ir jeigu reikia pridėkite dar vieną elementą. 
Kartokite, kol sąlyga nereikalaus pridėti elemento. */

echo "<h3> 9 task </h3>";

function isItPrimary($number)
{
    for ($i = 2; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

function pushRandom(&$arr)
{

    $newArrLength = count($arr);
    if ($newArrLength >= 3) {
        $last = $arr[$newArrLength - 1];
        $secondLast = $arr[$newArrLength - 2];
        $thirdLast = $arr[$newArrLength - 3];

        if (!isItPrimary($last) || !isItPrimary($secondLast) || !isItPrimary($thirdLast)) {
            $arr[] = rand(1, 33);
            pushRandom($arr);
        }
    }
    return $arr;
}
$naujasArr = generateRandomLengthArr(1, 33, 3);


echo "orgiginal array: <br>";
echo implode(" ", $naujasArr);
echo "<br>";

echo "gauname panaudojus rekursine: ";
pushRandom($naujasArr);
echo "<br>";
echo implode(" ", $naujasArr);
echo "<br>";


/* 10. Sugeneruokite masyvą iš 10 elementų, kurie yra masyvai iš 10 elementų, kurie yra atsitiktiniai 
skaičiai nuo 1 iki 100. Jeigu tokio didelio masyvo (ne atskirai mažesnių) pirminių skaičių vidurkis 
mažesnis už 70, suraskite masyve mažiausią skaičių (nebūtinai pirminį) ir prie jo pridėkite 3. 
Vėl paskaičiuokite masyvo pirminių skaičių vidurkį ir jeigu mažesnis nei 70 viską kartokite. */
echo "<h3> 10task </h3>";

$didelisMasyvas = [];
$result = [];
for ($i = 0; $i < 10; $i++) {
    $mazesniMasyvai = [];
    for ($j = 0; $j < 10; $j++) {
        $mazesniMasyvai[] = rand(1, 100);
    }
    $didelisMasyvas[] = $mazesniMasyvai;
}
echo "Pradinis didelis masyvas: <br>";
print_r($didelisMasyvas);

// isItPrimary(){}
function averageOfPrime($arr)
{
    $totalSum = 0;
    $countPrime = 0;
    foreach ($arr as $subarray) {
        if (isItPrimary($subarray)) {
            $totalSum += $subarray;
            $countPrime++;
        }
    }
    return $countPrime > 0 ? $totalSum / $countPrime : 0;
}

function plus3toMin(&$arr)
{

    $min = $arr[0][0];
    $minIdx = [];

    foreach ($arr as $i => $subarray) {
        foreach ($subarray as $j => $value) {

            if ($value < $min) {
                $min = $value;
                $minIdx = [$i, $j];
            }
        }
    }
    echo "<br> $min reiksme ir jos koordinates zemiau <br>";
    print_r($minIdx);
    $arr[$minIdx[0]][$minIdx[1]] += 3;

    return  $arr;
}

function countAverages($arr, &$result)
{
    foreach ($arr as $subarray) {
        $result[] = averageOfPrime($subarray);
    }
    return $result;
}

while (array_sum($result) < 70) {
    plus3toMin($didelisMasyvas);
    countAverages($didelisMasyvas, $result);
}

echo "Final big array:\n";
print_r($didelisMasyvas);

echo "Averages:\n";
print_r($result);