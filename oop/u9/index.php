<?php
/* 9. (STATIC) Sukurkite klasę MarsoPalydovas. Kontroliuokite objekto kūrimą 
iš klasės naudodami statinį metodą. Padarykite taip, kad iš viso būtų galima 
sukurti tik du objektus iš šitos klasės. Pirmam sukuriamam objektui įrašykite 
privačią savybę vardas lygią stringui “Deimas”, o antram tokią pat savybę tik 
lygią stringui “Fobas”. Bandant sukurti trečią objektą, turėtų būti grąžinamas
vienas iš anksčiau sukurtų objektų parinktas atsitiktine tvarka.*/


require __DIR__ ."/MarsoPalydovas.php";
$mp1 = MarsoPalydovas::sukurtiPalydova();

$mp2 = MarsoPalydovas::sukurtiPalydova();
$mp3 = MarsoPalydovas::sukurtiPalydova();
$mp4 = MarsoPalydovas::sukurtiPalydova();
$mp5 = MarsoPalydovas::sukurtiPalydova();
$mp6 = MarsoPalydovas::sukurtiPalydova();
$mp7 = MarsoPalydovas::sukurtiPalydova();
$mp8 = MarsoPalydovas::sukurtiPalydova();
$mp9 = MarsoPalydovas::sukurtiPalydova();


echo "<pre>";
var_dump($mp1);
echo "<br> gaunam: <br>";
var_dump($mp2);
var_dump($mp3);
var_dump($mp4);
var_dump($mp5);
var_dump($mp6);
var_dump($mp7);
var_dump($mp8);
var_dump($mp9);





