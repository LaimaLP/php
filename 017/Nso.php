<?php

/* Must rekomendacijos(ne sintakses, tai be ju veiktu, bet butu blogai): 
1. is dzidziosios raides ir 
2. viename faile viena klase, daugiau nieko;
3. klases name ir failo name turi sutapti, 100% atspindeti turi;
Rekomendaciju esminiai dalykai isdestyti:  https://www.php-fig.org/psr/psr-4/ */

/* Savybes triju rusiu: (skylutes, varzteliai, kad galetu bendrauti. Dar vadinamos savybes matomumais)
1. public (matomumas public, pvz kiemas, supynes);
2. private (spintele, stalcius privatus, tik tevukas zino, kas tame stalciuje);
3 .protected (pvz i buta patenka tik kurie ten gyvena)

Matomumas */

//klases turi funkcijas - metodus: irgi turi matomumus
class Nso{
//SAVYBES:
    public $speed = 'fast'; //neva supynes, gali matyti ir kitame faile, nes public;
    protected $color = 'red'; //neva butas, siuo atveju neiseina is class ribu ir namatom apie si kintamaji info;
    private $weight = 'heavy'; // taip pat kaip ir su protected. Klase be seimos todel siuo atveju protected ir private yra tokie pat.
//var_dump parodo viska, ivardija protected ir private, naudojamas debuginimui. Mato, bet realiai negali nieko su kuo padaryti.
    public $number;

//METODAI:
    public function __construct($number, $color='white'){
        $this->number = $number;
        $this->color= $color;
        echo 'I am a Nso <br>';
        $this->goSwim();
    }

    public function goFly(){
        echo 'I am flying  ' . $this->speed . '<br>';
        echo 'My color is ' . $this->color . '<br>';
        $this->goSwim(); // i public f-ja idejus private f-ja, atveriam info private f-jos. Nes public budama toj pacioj klasej prieina prie private.
        // this privalomas, kinatamasis, kuriame idetas einamasis objektas, Naudojamas klases viduryje. kitur prasmes neturi, nes nera kontekto.  
    } //konkreciai sito objekto.  nes nera palaidu kintamuju
 
 
 
    private function goSwim(){
        echo 'I am swiming  <br>';
    }


    public function changeColor($color) //parametras, argumentas melynas
    {
        echo 'My color was ' . $this->color . '<br>'; //cia yra savybe - raudonas - , o zemiau kintamasis
        echo 'Change to ' . $color . '<br>'; 
        $this->color = $color; //savybe jau cia tapo argumentas
    }
}
/* Svarbu atskirti $this->color(sito objekto senbuvis, savybe:raudona spalva) ir $color(argumentas perduodamas is isores), jie visiskai skirtingi, nko neturi tarpusavy. */

/*magic methods: https://www.php.net/manual/en/language.oop5.magic.php
nereikia paleidineti, kai kazkas nutinka, tada ir pasileidzia. Kai atsiranda zodelis new, tada pasiledzia kontruktorius

construct: 
*/



/*
REZIUME:
Turim klase. Is klases prisigaminam, kiek norim objektu. Objektas priskiriamas pagal reference. 
Objektas gali tureti triju rusiu savybes ir triju rusiu funkcijas - metodus. 
Isoreje pasiekiamas tik public. 
Savybe toje isoreje gali buti lengvai keiciamos, overwritininama, o funkcija ne. Jai reikia seimos. 
 */
