<h1> Big </h1>

<?php

echo('<h1>Labas vakaras </h1>');
// echo yra kalbos konstruktas, kuris nieko negrazina, todel galima aprasyti kaip f-ja.
$skaicius = 25;

//po sito zenklo vel galima rasyti html :
?> 

<h1> Big </h1>

<?php //ir tuomet vel php

echo '<h1> Labas vakaras </h1>';
echo $skaicius; 
echo '<br>';

$string1='Labas';
$string2='rytas';
echo $string1. ' '.$string2;
// echo $string1 + $string2;
echo '<br>';

// kabutes ' " ; dvigubom interpretuoja, kad kazka dar reikes daryti;
$string3 = "$string1 rytas";
echo $string3;
echo '<br>';

//kintamojo kintamasis;
$a1='a2';
$a2='a3';
$a3='Labuka';

echo $$$a1;

echo '<br>';

print $a3;
echo '<pre>';
print_r([$a1, $a2, $a3]);

var_dump('labas');
var_dump('gegutė'); //skaiciuoja baitus;

