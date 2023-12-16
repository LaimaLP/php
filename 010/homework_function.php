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
$arrLength = rand(10, 20);
$i = 0;
$arr7 = [];
while ($i < $arrLength - 1) {
    $arr7[] = rand(0, 10);
}
