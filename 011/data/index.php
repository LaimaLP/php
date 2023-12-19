<?php
echo '<pre>';
$animals = require __DIR__ . '/animals.php';

$animals[1] = 'Good ' . $animals[1];
$animals[101] = 'Good tikrai  ' . $animals[1];
$animals[102] = 'Good tikrai  ' . $animals[1];
$animals[] = 'Good tikrai  zz' . $animals[1];
// $animals["nu"] = 'Good tikrai  zz indexas string'. $animals[1];

echo $animals[1.2];
echo '<br> animal  arejus: <br>';
print_r($animals);


$json = json_encode($animals, JSON_PRETTY_PRINT); //uzkoduojami animal i json faila
$ser = serialize($animals);
file_put_contents(__DIR__ . '/animals.json', $json);

$getJson = file_get_contents(__DIR__ . '/animals.json'); //skkaito json faila ir grazina kintamuoju
$getSer = file_get_contents(__DIR__ . '/animals.ser');

$data = json_decode($getJson); //dekoduojamas atgal is json i array kintamuoju jau $data
$data = unserialize($getSer);

$copy = array_map(function($item){ //shallow copy
    return $item;
}, $data);
echo "<br> copy: <br>";
print_r($copy);


echo '<br>data duomenys: <br>';
foreach ($copy as $animal) {
    echo $animal . '<br>';
}
echo '</pre>';