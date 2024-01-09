<?php


require __DIR__ . '/RandomColorInterface.php';
require __DIR__ . '/RandomDigitInterface.php';


require __DIR__ . '/ColorDigit.php';




$colorDigit = new ColorDigit;

$colorDigit->print();

//skirtas uzduociai apiforminti. jei viskas veikiam tai kazkuri klase turi nurodyta interface metoda.
//implementiniti galima daug, extendinti tik viena
//daznai naudojami (i interface susirasom visus metodus, susiplanuojam ir darom)
