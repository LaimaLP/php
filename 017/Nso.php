<?php

//Must rekomendacijos: is dzidziosios raides ir 
//viename faile viena klase, daigiau nieko;
// klases name ir failo name turi sutapti;
//esminiai dalykai isdestyti rekomendaciju: https://www.php-fig.org/psr/psr-4/

//savybes triju rusiu: 
// 1. static, (pvz supynes)
// 2. public, 
// 3 .protected (i buta oatenka tik kurie ten gyvena)
//private (spintele, stalcius orivatus)
// Matomumas

//klases turi funkcijas - metodus: irgi turi matomumus
class Nso {

    public $speed = 'fast'; //gali matyti ir kitame faile
    protected $color = 'red';
    private $weight = 'heavy';

    public function goFly(){
        echo 'I am flying  ' .$this->speed . '<br>';
        $this->goSwim(); // this privalomas, kinatamasis, kuriame idetas einamasis objektas, Naudojamas klases viduryje. kitur prasmes neturi, nes nera kontekto.  
    }//konkreciai sito objekto.  nes nera palaidu kintamuju
    private function goSwim(){
        echo 'I am swiming  <br>';
    }
}


