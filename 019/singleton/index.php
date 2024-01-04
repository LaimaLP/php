<?php

require __DIR__ ."/Cart.php";

$cartOne = new Cart;


$cartTwo = new Cart;

echo '<pre>';
var_dump($cartOne); 
var_dump($cartTwo);