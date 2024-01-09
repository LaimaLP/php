<?php

require __DIR__ ."/Person.php";
require __DIR__ ."/Sing.php";
require __DIR__ ."/Stories.php";
require __DIR__ ."/Paint.php";


$p = new Person;

$p->sayHello();
$p->tellStory();
$p->sing();
$p->paint();
$p->scrolling();
$p->scrolling2();

echo $p->song;

//jei tetis turi toki metoda kaip vaikas, gauname vaiko metoda.

//pirma ziuri 

//traitas negali tureti propsu, kurie yra skirtingi nuo klases
//jei skiriasi properciai traito ir klases, gauname error, jeigu klaseje
//nera tokio pat - ok. Sprendimo nera, kaip su metodais. Konfliktas