<?php


require __DIR__ . '/RandomColorInterface.php';
require __DIR__ . '/RandomDigitInterface.php';
require __DIR__ . '/ColorDigit.php';




$colorDigit = new ColorDigit;

$colorDigit->print();

/*skirtas uzduociai apiforminti. jei viskas veikia tai kazkuri klase turi nurodyta interface metoda.
- interfac'e viskas yra abstraktu ir public;
- implementiniti galima daug, extendinti tik viena
daznai naudojami (i interface susirasom visus metodus, susiplanuojam ir darom)


