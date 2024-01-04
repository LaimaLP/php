<?php
/*  kaip apriboti ieno objekto sukurima is vienos klases*/
require __DIR__ ."/Cart.php";



/* uzdraudem su privaciu klases konctructorius sukurti objektus naudojant new.
$cartOne = new Cart;
$cartThree = new Cart;
*/


$cartOne = Cart::getCart();
$cartThree = Cart::getCart();
//obj nuklonavimas, gaunam toki pati, bet kita
$cartTwo = clone $cartOne;

echo '<pre>';

var_dump($cartOne); 
var_dump($cartTwo);
var_dump($cartThree);