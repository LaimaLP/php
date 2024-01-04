<?php

require __DIR__ ."/Cart.php";

$cartOne = Cart::getCart();
$cartThree = Cart::getCart();
//obj nuklonavimas, gaunam toki pati, bet kita
$cartTwo = clone $cartOne;

echo '<pre>';

var_dump($cartOne); 
var_dump($cartTwo);
var_dump($cartThree);