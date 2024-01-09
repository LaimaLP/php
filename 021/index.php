<?php


require __DIR__ .'/H1.php';
require __DIR__ ."/RandomColor.php";


$text = new RandomColor();

echo $text->text2H1('Hello, Laima');

/* 
1. is abstrakciu klasiu objektu daryti negalima;
abstrakcijos aprasomos, kai zinom, kad jos turim butim implementuotos vaikuose;

*/

//jei rasom tevus, reikia kad vaikas duotu, todel rasom abstract;