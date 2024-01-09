<?php

class Person extends Sing{
    use Stories, Paint{
    Paint::scrolling insteadof Stories;
    Stories::scrolling as scrolling2; //su sia eilute galime panaudoti abu metodus ir is Paint ir is Stories
    }

    public $song = 'la, ku, ku';
    public function sayHello(){
        echo '<h1> Hello </h1>'; 
    }
    public function scrolling(){
        echo "Tiktok";
    }
}

/* 
- pirmiausia vaikas, tada traido ir tada extendo savybes jei sutampa pavadinimai,
- o jei traitai abu turi vioenoda metoda, tuomet konfliktas (isprendziam panaudpjant insteadof). 
- jeigu traitas turi tapati var song'a. KLaida. Traitas negali tureti kitokio var nei klase, nebent identiski.
*/