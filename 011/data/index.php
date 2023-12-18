<?php
echo '<pre>';
$animals = require __DIR__ . '/animals.php';

$animals[1] = 'Good ' . $animals[1];
$animals[101] = 'Good tikrai  ' . $animals[1];



$json = json_encode($animals, JSON_PRETTY_PRINT);

file_put_contents(__DIR__ . '/animals.json', $json);

$getJson = file_get_contents(__DIR__ . '/animals.json');

$data = json_decode($getJson);

$copy = array_map(function($item){
    return $item;
}, $data);

print_r($copy);


foreach ($data as $animal) {
    echo $animal . '<br>';
}