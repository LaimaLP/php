<?php
// veiksmo failas, nieko nerodo, daro
$boxId = rand(10000000, 99999999);
$amount = $_POST['amount'] ?? 0; //amount ateina is posto
// paimam visas dezes, ipusinam i dezes nauja masyva su box ID 
$boxes = json_decode(file_get_contents(__DIR__ . '/data/boxes.json'), true);
$boxes[] = [
    'boxId' => $boxId,
    'amount' => $amount,
];
// tuomet visus boxus idedam i json faila, sustringinam ir tuomet persiunciau i create - redirectinam. die nereikia nes ir taip viskas baigiasi
file_put_contents(__DIR__ . '/data/boxes.json', json_encode($boxes, JSON_PRETTY_PRINT));

header('Location: http://localhost/backEnd/php/crud/read.php');