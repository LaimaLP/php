<?php
session_start();
// update box

/* veiksmu seka: 
1. get box id from url
3.if box not found, redirect to read.php;
2.get box from json file;
4.if box found, update box;
5.save box to json file;
6. redirect to read.php */

$id = $_GET['id'] ?? 0;

if (!$id) {
    header('Location: http://localhost/backEnd/php/crud/read.php');
    exit;
}

$boxes = json_decode(file_get_contents(__DIR__ . '/data/boxes.json'), true);

foreach ($boxes as $i => $box) {
    if ($box['boxId'] == $id) { //susirandu ta boxa
        $box['amount'] = (int) $_POST['amount']; //ji updatinu. isideda stringas, tai prieky dar (int) pridedame. "castingas" irasome ko norime
        $boxes[$i] = $box;
        break;
    }
}

file_put_contents(__DIR__ . '/data/boxes.json', json_encode($boxes, JSON_PRETTY_PRINT));

header('Location: http://localhost/backEnd/php/crud/read.php');