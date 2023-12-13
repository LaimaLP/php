<h1> Masyvai </h1>

<?php

echo '<pre>';
$arr= ['racoon', 'rabbit', 'leon'];

//dont do this
$badArray = array('racoon', 'rabbit', 'fox');
print_r($badArray);
// array is primitive, yra kopija;

$arr2 = $arr;
$arr2[1] = 'dog';

array_push($arr, 'cat'); //lame
$arr[]='cat'; //cool
array_unshift($arr, 'mouse');

array_pop($arr2);
array_shift($arr2);

$arr[19] = 'cow';
$arr[]='cat'; //cool
$arr['lauke']='cat'; //cool
$arr['']='cat';
$arr['']='cat2';
$arr[]='cat2';
$arr[]='cool cat2';
$arr['null']='cool cat2';
$arr[true+true+true]='cool cat13';
$arr[false]='cool cat3';
$arr['1']='vienetas';
$arr['01']='vienetas';
$arr[true+'1']='true ir skaicius';
$arr[1.9]='floatas 0.5';

array_unshift($arr, "aaaaaaa");
$arr4 = array_values($arr);

print_r($arr2);
print_r($arr);
print_r($arr4);

echo count($arr);
echo '<br>';

foreach($arr as $index => &$value){
    // $value= 'kate winslet';
    $value = 'kate winslet';
}

$A = 5;
$B = &$A;
$A++;
echo '<br>';
echo $A, ' ', $B;
echo '<br>';

print_r($arr);

